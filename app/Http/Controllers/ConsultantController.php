<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\ConsultantDeedOfCompany;
use Illuminate\Http\Request;

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
            $consultants        = Consultant::where('name', 'like', '%'. $params .'%')->paginate(6);
        } else {
            $consultants        = Consultant::paginate(6);
        }

//        echo json_encode($consultants); die();
        return view('consultant.index', [
            'consultants'   => $consultants,
            'params'        => (isset($params)) ? $params : ''
        ]);
    }

    // detail page
    public function detail(Request $request)
    {
        $refer      = $request->query('refer');

        if (empty($refer)) {
            return redirect('consultants');
        }

        $consultant                     = Consultant::where('refer', $refer)->firstOrFail();
        $consultant->deed_of_company    = ConsultantDeedOfCompany::where(['consultants' => $consultant->id, 'deleted_at' => null])->get();

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

    public function save_deed(Request $request)
    {
        $name       = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
        $encode     = base64_encode_file($_FILES);
        $decode     = base64_decode_file($name, $encode, '/uploads/documents/consultant/deed/');

        if (is_file(public_path() . $decode)) {
            // file saved
            $consultant                             = Consultant::where('refer', $request->input('modalAddNewDeedRefer'))->firstOrFail();
            $deedOfCompany                          = new ConsultantDeedOfCompany();
            $deedOfCompany->type                    = $request->input('modalAddNewDeedType');
            $deedOfCompany->submitted               = $request->input('modalAddNewDeedSubmitted');
            $deedOfCompany->document                = $decode;
            $deedOfCompany->verificationRespons     = 0;
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

    public function store_file(Request $request)
    {
        if($request->file('file')) {

            $files       = $request->file('file');
            $fileInfo   = $files->getClientOriginalName();
            $filename   = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $fullname   = strtolower($filename) . "_" . time().'_' . $extension;

            // File upload location
            $location = public_path('uploads/documents/consultant/deed/');
            $files->move($location, $fullname);

//            if (!is_dir($location)) {
//                mkdir($location, 0777, true);
//            }

            // Response
            $data['success'] = 1;
            $data['message'] = 'Uploaded Successfully!';
            $data['fullname']   = $fullname;

        }else{
            // Response
            $data['success'] = 0;
            $data['message'] = 'File not uploaded.';
            $data['fullname']   = null;
        }

        return response()->json($data);
    }
}
