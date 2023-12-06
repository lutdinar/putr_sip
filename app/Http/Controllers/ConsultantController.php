<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\Consultant;
use App\Models\ConsultantDeedOfCompany;
use App\Models\ConsultantIujk;
use App\Models\ConsultantNib;
use App\Models\ConsultantOwner;
use App\Models\ConsultantPersonil;
use App\Models\ConsultantSbu;
use App\Models\ConsultantSiup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ConsultantController extends Controller
{

    public function __construct()
    {

    }

    // index page
    public function index(Request $request)
    {
        $params             = $request->query('search');
        if (isset($params)) {
            $consultants        = Consultant::where('name', 'like', '%'. $params .'%')->whereNull('deleted_at')->paginate(6);
        } else {
            $consultants        = Consultant::where(['deleted_at' => null])->paginate(6);
        }

        $total_users            = Consultant::whereNotNull('account')->whereNull('deleted_at')->count();
        $total_not_users        = Consultant::whereNull('account')->whereNull('deleted_at')->count();

        return view('consultant.index', [
            'consultants'       => $consultants,
            'params'            => (isset($params)) ? $params : '',
            'total'             => Consultant::whereNull('deleted_at')->count(),
            'total_users'       => $total_users,
            'total_not_users'   => $total_not_users
        ]);
    }

    // detail page
    public function detail(Request $request)
    {
        $refer      = $request->query('refer');

        if (empty($refer)) {
            abort(404);
        }

        $consultant                     = Consultant::where('refer', $refer)->firstOrFail();
        $consultant->director           = ConsultantOwner::where(['consultants' => $consultant->id, 'is_director' => 'Y'])->first();
        $consultant->deed_of_company    = ConsultantDeedOfCompany::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->owners             = ConsultantOwner::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->sbu                = ConsultantSbu::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->iujk               = ConsultantIujk::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->siup               = ConsultantSiup::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->nib                = ConsultantNib::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->personil           = ConsultantPersonil::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();
        $consultant->account            = User::where(['id' => $consultant->account, 'deleted_at' => null])->first();

//        echo json_encode($consultant); die();
        return view('consultant.detail', [
            'consultant'    => $consultant
        ]);
    }

    public function store(Request $request)
    {
        // initialize
        $getRandomString        = random_string();
        $dateNow                = date("U", strtotime(date('Y-m-d H:i:s')));
        $refer                  = hashing_string(($dateNow * 3) . $getRandomString);

        // create object
        $consultant             = new Consultant();
        $consultant->refer      = $refer;
        $consultant->name       = $request->input('addNewConsultantName');
        $consultant->email      = $request->input('addNewConsultantEmail');
        $consultant->phone      = $request->input('addNewConsultantPhone');
        $consultant->address    = $request->input('addNewConsultantAddress');

        $save       = $consultant->insert_entry();

        if ($save)
        {
            $status     = "success";
            $message    = "Penyedia Jasa " . $consultant->name . " berhasil ditambahkan";
        } else {
            $status     = "failed";
            $message    = "Penyedia Jasa " . $consultant->name . " gagal ditambahkan";
        }

        return redirect('consultants')->with([
            'status'    => $status,
            'message'   => $message
        ]);
    }

    public function delete(Request $request)
    {
        $consultant     = $request->input('consultant');
        if (empty($consultant)) {
            return response()->json(['status' => 'failed', 'message' => 'Penyedia Jasa belum diatur!']);
        } else {
            $data       = Consultant::findOrFail($consultant);

            if (!empty($data)) {
                if (!empty($data->account)) {
                    $user           = User::find($data->account);
                    $user->state        = 'inactive';
                    $user->deleted_at   = now();
                    $user->save();
                }

                $data->deleted_at   = now();
                $delete             = $data->save();

                if ($delete) {
                    $status         = 'success';
                    $message        = 'Penyedia Jasa berhasil dihapus';
                } else {
                    $status         = 'failed';
                    $message        = 'Penyedia Jasa gagal dihapus! Silahkan coba lagi';
                }

                return response()->json(['status' => $status, 'message' => $message]);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'Penyedia Jasa tidak ditemukan! Silahkan coba lagi']);
            }
        }
    }

    public function deed_store(Request $request)
    {
//        $name       = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
//        $file       = "file";
//        $encode     = base64_encode_file($_FILES, $file);
//        $decode     = base64_decode_file($name, $encode, '/uploads/documents/consultant/deed/');

        $hashName       = $request->file('modalAddNewDeedDocument')->hashName();
        $filename       = strtotime(now()) . '_deed_of_company_' . $hashName;

        $path_deed      = file_store($filename, $request->file('modalAddNewDeedDocument'), '/documents/consultant/deed/');

        if (is_file(storage_path('app/public') . $path_deed)) {
            // file saved
            $consultant                             = Consultant::where('refer', $request->input('modalAddNewDeedRefer'))->firstOrFail();
            $deedOfCompany                          = new ConsultantDeedOfCompany();
            $deedOfCompany->type                    = $request->input('modalAddNewDeedType');
            $deedOfCompany->submitted               = $request->input('modalAddNewDeedSubmitted');
            $deedOfCompany->document                = $path_deed;
            $deedOfCompany->verification_respons     = 0;
            $deedOfCompany->consultants             = $consultant->id;

            $save                                   = $deedOfCompany->insert_entry();

            if ($save)
            {
                $status     = "success";
                $message    = "Dokumen Akta Perusahaan berhasil ditambahkan";
            } else {
                $status     = "failed";
                $message    = "Dokumen Akta Perusahaan gagal ditambahkan";
            }
        } else {
            // file not saved
            $status     = "failed";
            $message    = "Dokumen Akta Perusahaan gagal di unggah! Silahkan coba lagi";
        }

        return redirect('consultants/detail?refer=' . $request->input('modalAddNewDeedRefer'))->with([
            'status'    => $status,
            'message'   => $message
        ]);
    }

    public function deed_delete(Request $request)
    {
       $id      = $request->input('deedOfCompany');

       if (!empty($id)) {
           $deleted             = ConsultantDeedOfCompany::where('id', $id)->update(['deleted_at' => now()]);

           if ($deleted) {
               $data['status']  = 'success';
               $data['message'] = 'Dokumen Akta Perusahaan berhasil dihapus';
           } else {
               $data['status']  = 'failed';
               $data['message'] = 'Dokumen Akta Perusahaan gagal dihapus! Silahkan coba lagi';
           }
       } else {
           $data['status']      = 'failed';
           $data['message']     = 'Document belum dipilih!';
       }

        return response()->json($data);
    }

    // NOT COMPLITED
    public function owner_store(Request $request)
    {
        if ($request->input('addNewOwner') !== null) {
            // update


        } else {
            // insert
            $name               = $request->input('addNewOwnerName');
            $path_photo         = null;
            $path_id_card       = null;
            $path_tax_document  = null;
            $message_photo      = null;
            $message_id_card    = null;
            $message_tax_document   = null;
            $consultants        = Consultant::where('refer', $request->input('addNewOwnerRefer'))->firstOrFail();

            if (!empty($request->addNewOwnerPhoto)) {
                if ($request->addNewOwnerPhoto->isValid()) {
                    $hashName       = $request->file('addNewOwnerPhoto')->hashName();
                    $filename       = str_replace(' ', '_',  strtotime(now()) . '_photo_' . strtolower($name)) . '_' . $hashName;

                    $path_photo     = file_store($filename, $request->file('addNewOwnerPhoto'), '/documents/consultant/owner/photos/');
                } else {
                    $message_photo  = 'Pas Foto tidak valid! Silahkan perbarui data';
                }
            }

            if (!empty($request->addNewOwnerIdCard)) {
                if ($request->addNewOwnerIdCard->isValid()) {
                    $hashName       = $request->file('addNewOwnerIdCard')->hashName();
                    $filename       = str_replace(' ', '_',  strtotime(now()) . '_id_card_' . strtolower($name)) . '_' . $hashName;

                    $path_id_card   = file_store($filename, $request->file('addNewOwnerIdCard'), '/documents/consultant/owner/id_cards/');
                } else {
                    $message_id_card = 'Dokumen KTP tidak valid! Silahkan perbarui data';
                }
            }

            if (!empty($request->addNewOwnerTaxDocument)) {
                if ($request->addNewOwnerTaxDocument->isValid()) {
                    $hashName               = $request->file('addNewOwnerTaxDocument')->hashName();
                    $filename               = str_replace(' ', '_',  strtotime(now()) . '_tax_document_' . strtolower($name)) . '_' . $hashName;

                    $path_tax_document      = file_store($filename, $request->file('addNewOwnerTaxDocument'), '/documents/consultant/owner/tax_documents/');
                } else {
                    $message_tax_document   = 'Dokumen NPWP tidak valid! Silahkan perbarui data';
                }
            }

            $owner                                  = new ConsultantOwner();
            $owner->name                            = $name;
            $owner->email                           = $request->input('addNewOwnerEmail');
            $owner->phone                           = $request->input('addNewOwnerPhone');
            $owner->photo                           = (!empty($path_photo)) ? $path_photo : null;
            $owner->id_card                         = (!empty($path_id_card)) ? $path_id_card : null;
            $owner->id_card_verification_respons    = (!empty($path_id_card)) ? 0 : null;
            $owner->tax_id_document                 = (!empty($path_tax_document)) ? $path_tax_document : null;
            $owner->tax_id_verification_respons     = (!empty($path_tax_document)) ? 0 : null;
            $owner->is_director                     = ($request->input('addNewOwnerDirector') == 'on') ? 'Y' : 'N';
            $owner->consultants                     = $consultants->id;

            $save                                   = $owner->insert_entry();

            if ($save) {
                $status         = 'success';
                $message        = 'Pemilik Perusahaan berhasil disimpan';
            } else {
                $status         = 'failed';
                $message        = 'Pemilik Perusahaan gagal disimpan';
            }
        }

//        return redirect('consultants/detail?refer=' . $request->input('addNewOwnerRefer'))->with([
//            'status'                => $status,
//            'message'               => $message,
//            'messagePhoto'          => (!empty($message_photo)) ? $message_photo : null,
//            'messageIdCard'         => (!empty($message_id_card)) ? $message_id_card : null,
//            'messageTaxDocument'    => (!empty($message_tax_document)) ? $message_tax_document : null
//        ]);
    }

    public function owner_detail(Request $request)
    {
        $id         = $request->input('owner');

        if (!empty($id)) {
            $owner   = ConsultantOwner::where('id', $id)->firstOrFail();

            if (!empty($owner)) {
                $data['status']     = 'success';
                $data['message']    = 'Data berhasil ditemukan';
                $data['owner']      = $owner;
            } else {
                $data['status']     = 'failed';
                $data['message']    = 'Data gagal ditemukan';
                $data['owner']      = null;
            }
        } else {
            $data['status']     = 'failed';
            $data['message']    = 'Data pemilik perusahaan belum diatur!';
            $data['owner']      = null;
        }

        return response()->json($data);
    }

    public function sbu_store(Request $request)
    {
        $path_sbu           = null;
        $consultants        = Consultant::where('refer', $request->input('modalAddSbuRefer'))->firstOrFail();

        if ($request->modalAddSbuDocument->isValid()) {
            $hashName       = $request->file('modalAddSbuDocument')->hashName();
            $filename       = strtotime(now()) . '_sbu_' . $hashName;

            $path_sbu       = file_store($filename, $request->file('modalAddSbuDocument'), '/documents/consultant/qualifications/sbu/');
        } else {
            $message        = 'Dokumen Sertifikat Badan Usaha tidak valid! Silahkan coba lagi';
            return redirect('consultants/detail?refer=' . $request->input('modalAddSbuRefer'))->with(['status' => 'failed', 'message' => $message]);
        }

        $sbu                        = new ConsultantSbu();
        $sbu->expire_date           = $request->input('modalAddSbuExpireDate');
        $sbu->document              = (!empty($path_sbu)) ? $path_sbu : null;
        $sbu->verification_respons  = 0;
        $sbu->consultants           = $consultants->id;

        $save                       = $sbu->insert_entry();

        if ($save) {
            $status                 = 'success';
            $message                = 'Dokumen Sertifikat Badan Usaha berhasil disimpan';
        } else {
            $status                 = 'failed';
            $message                = 'Dokumen Sertifikat Badan Usaha gagal disimpan! Silahkan coba lagi';
        }

        return redirect('consultants/detail?refer=' . $consultants->refer)->with(['status' => $status, 'message' => $message]);
    }
    public function owner_truncate()
    {
        $owner  = new ConsultantOwner();
        $truncate   = $owner->truncate_entry();

        echo json_encode($truncate);
    }

    public function siup_store(Request $request)
    {

    }

    public function nib_store(Request $request)
    {

    }

    public function personil_store(Request $request)
    {
        $consultant                 = Consultant::where('refer', $request->input('addNewPersonilRefer'))->firstOrFail();
        $name                       = $request->input('addNewPersonilName');
        $path_photo                 = null;
        $path_education_document    = null;
        $path_id_card               = null;
        $message_photo              = null;
        $message_education_document = null;
        $message_id_card            = null;
        $message                    = null;

        if ($request->hasFile('addNewPersonilPhoto')) {
            if ($request->file('addNewPersonilPhoto')->isValid()) {
                $hashName       = $request->file('addNewPersonilPhoto')->hashName();
                $filename       = str_replace(' ', '_', strtotime(now()) . "_personil_photo_" . strtolower($name) . "_" . $hashName);

                $path_photo     = file_store($filename, $request->file('addNewPersonilPhoto'), '/documents/consultant/personil/photos/');
            } else {
                $message_photo  = 'Foto Personil gagal diupload! Silahkan coba lagi nanti';
            }
        }

        if ($request->hasFile('addNewPersonilEducationDocument')) {
            if ($request->file('addNewPersonilEducationDocument')->isValid()) {
                $hashName       = $request->file('addNewPersonilEducationDocument')->hashName();
                $filename       = str_replace(' ', '_', strtotime(now()) . "_personil_education_" . strtolower($name) . "_" . $hashName);

                $path_education_document    = file_store($filename, $request->file('addNewPersonilEducationDocument'), '/documents/consultant/personil/educations/');
            } else {
                $message_education_document = 'Dokumen ijazah gagal diupload! Silahkan coba lagi nanti';
            }
        }

        if ($request->hasFile('addNewPersonilIdCard')) {
            if ($request->file('addNewPersonilIdCard')->isValid()) {
                $hashName       = $request->file('addNewPersonilIdCard')->hashName();
                $filename       = str_replace(' ', '_', strtotime(now()) . "_personil_id_card_" . strtolower($name) . "_" . $hashName);

                $path_id_card   = file_store($filename, $request->file('addNewPersonilIdCard'), '/documents/consultant/personil/id_cards/');
            } else {
                $message_id_card    = 'Dokumen KTP gagal diupload! Silahkan coba lagi nanti';
            }
        }

        $personil                                   = new ConsultantPersonil();
        $personil->name                             = $name;
        $personil->photo                            = (!empty($path_photo)) ? $path_photo : null;
        $personil->date_of_birth                    = $request->input('addNewPersonilDob');
        $personil->id_card                          = (!empty($path_id_card)) ? $path_id_card : null;
        $personil->id_card_verification_respons     = (!empty($path_id_card)) ? 0 : null;
        $personil->position                         = $request->input('addNewPersonilPosition');
        $personil->education_level                  = $request->input('addNewPersonilEducation');
        $personil->education_document               = (!empty($path_education_document)) ? $path_education_document : null;
        $personil->education_verification_respons   = (!empty($path_education_document)) ? 0 : null;
        $personil->consultants                      = $consultant->id;

        $save                                       = $personil->insert_entry();

        if ($save) {
            $status             = "success";
            $message            = "Personil $name berhasil ditambahkan";
        } else {
            $status             = "failed";
            $message            = "Personil $name gagal ditambahkan! Silahkan coba lagi";
        }

        $full_message           = $message . "\n" . $message_photo . "\n" . $message_education_document . "\n" . $message_id_card;

        return redirect('consultants/detail?refer=' . $consultant->refer)->with([
            'status'    => $status,
            'message'   => $full_message
        ]);
    }

    public function user_store(Request $request)
    {
        $username           = $request->input('userName');
        $password           = hashing_string($request->input('userPassword'));
        $userId             = $request->input('user');
        $consultant         = Consultant::where('refer', $request->input('userRefer'))->first();

        if (!empty($userId)) {
            // update
            $users          = User::find($userId);

            if ($username !== $users->username) {
                $users->username    = $username;
            }

            if ($password !== $users->password) {
                $users->password    = $password;
            }

            $update             = $users->save();
            if ($update) {
                $status         = 'success';
                $message        = 'Akun pengguna berhasil diperbarui';
            } else {
                $status         = 'failed';
                $message        = 'Akun pengguna gagal diperbarui! Silahkan coba lagi';
            }
        } else {
            // insert
            $users              = new User();
            $users->name        = $consultant->name;
            $users->email       = $consultant->email;
            $users->username    = $username;
            $users->password    = $password;
            $users->type        = 'consultant';
            $users->state       = 'active';
            $users->role        = 'consultant';

            $validator          = Validator::make(array(
                'username'      => $users->username,
                'email'         => $users->email
            ), [
                'username'      => 'required|unique:users,username|min:6|max:30',
                'email'         => 'required|unique:users,email'
            ], [
                'username.unique'   => 'Username sudah digunakan oleh pengguna lain',
                'email.unique'      => 'Email perusahaan sudah terdaftar'
            ]);

            if ($validator->fails()) {
                return redirect('consultants/detail?refer=' . $consultant->refer)->withErrors($validator);
            } else {
                $save           = $users->insert_entry();
                if ($save) {
                    $consultants            = Consultant::find($consultant->id);
                    $consultants->account   = $users->id;
                    $consultants->save();

                    $status                 = 'success';
                    $message                = 'Akun pengguna ' . $consultant->name . ' berhasil disimpan';
                } else {
                    $user                   = User::find($users->id);
                    $user->delete();
                    $status                 = 'failed';
                    $message                = 'Akun pengguna ' . $consultant->name . ' gagal disimpan! Silahkan coba lagi';
                }
            }
        }

        return redirect('consultants/detail?refer=' . $consultant->refer)->with([
            'status'    => $status,
            'message'   => $message
        ]);
    }

    public function get_consultant_json(Request $request)
    {
        $search         = $request->query('search');
        $page           = $request->query('page');

        $consultants    = new Consultant();
        $data           = $consultants->get_all_where_limit($search, $page);

        if (!empty($data['consultants'])) {
            foreach ($data['consultants'] as $consultant) {
                $consultant->text   = $consultant->name;
            }
        }

        return response()->json([
            'totalRows'     => $data['totalRows'],
            'results'       => $data['consultants'],
            'pagination'    => ['more' => true]
        ]);
    }
}
