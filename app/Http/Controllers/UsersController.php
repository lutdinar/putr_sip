<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\User;
use App\Models\UserForgotPassword;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function index()
    {
        return view('users/index', [
            'users'         => User::where('deleted_at', null)->count(),
            'active'        => User::where(['state' => 'active', 'deleted_at' => null])->count(),
            'non_active'    => User::where(['state' => 'non-active', 'deleted_at' => null])->count()
        ]);
    }

    public function login()
    {
        if (Session::has('x-user-log') && (Session::get('x-user-log') == 'logged_in') || !empty(Session::get('x-user-name'))){
            return redirect('/');
        }

        return view('login');
    }

    public function forgot()
    {
        return view('users/forgot');
    }

    public function store(Request $request)
    {
        $user       = new User();
        $user->name         = $request->input('formName');
        $user->email        = $request->input('formEmail');
        $user->username     = $request->input('formUsername');
        $user->password     = hashing_string($request->input('formPass'));
        $user->role         = $request->input('formRole');
        $user->type         = 'internal';
        $user->state        = 'active';

        $validator          = Validator::make(array(
            'username'      => $user->username,
            'email'         => $user->email
        ), [
            'username'      => 'required|unique:users,username|min:6|max:30',
            'email'         => 'required|unique:users,email'
        ], [
            'username.unique'   => 'Username sudah digunakan oleh pengguna lain',
            'email.unique'      => 'Email perusahaan sudah terdaftar'
        ]);

        if ($validator->fails()) {
            return redirect('users')->withErrors($validator);
        } else {
            $save = $user->insert_entry();

            if ($save) {
                $status         = 'success';
                $message        = 'Akun ' . $user->name . ' dengan Username: ' . $user->username . ' berhasil disimpan';
            } else {
                $status         = 'success';
                $message        = 'Akun ' . $user->name . ' dengan Username: ' . $user->username . ' gagal disimpan! Silahkan coba lagi';
            }

            return redirect('users')->with([
                'status'        => $status,
                'message'       => $message
            ]);
        }
    }

    public function signin(Request $request)
    {
        $username       = $request->input('userName');
        $password       = hashing_string($request->input('passWord'));

        $user   = User::where('password', $password)
            ->where('username', $username)
            ->orWhere('email', $username)
            ->whereNull('deleted_at')->first();

        if (!empty($user)) {
            if ($user->state == 'inactive') {
                $checkUser      = UserForgotPassword::find($user->id);
                if (!empty($checkUser)) {
                    return redirect('authentications')->with([
                        'status'        => 'failed',
                        'message'       => 'Akun anda di non-aktifkan karena telah mengajukan pengaturan ulang kata sandi! Mohon tunggu instruksi atau pemberitahuan dari Administrator'
                    ]);
                } else {
                    return redirect('authentications')->with([
                        'status'        => 'failed',
                        'message'       => 'Akun anda sedang di non-aktifkan! Silahkan hubungi Administrator'
                    ]);
                }
            }

            if ($user->role === 'consultant') {
                $consultant     = Consultant::where('account', $user->id)->first();
                session(['x-consultant' => $consultant->id, 'refer' => $consultant->refer]);
            }
            session([
                'x-user-name'   => $user->username,
                'x-user-log'    => 'logged_in',
                'x-user-role'   => $user->role
            ]);
            return redirect('/');
        } else {
            return redirect('authentications')->with([
                'status'        => 'failed',
                'message'       => 'Akun tidak ditemukan atau Username/Password tidak tepat!'
            ]);
        }
    }

    public function signout(Request $request)
    {
        $request->session()->flush();
        return redirect('authentications');
    }

    public function forgot_password()
    {
        return view('forgot');
    }

    public function forgot_store(Request $request)
    {
        $username       = $request->input('email-username');

        $user           = User::where('state', 'active')
                                ->where('username', $username)
                                ->orWhere('email', $username)
                                ->whereNull('deleted_at')->first();
        if (!empty($user)) {
            $users          = User::find($user->id);
            $users->state   = 'inactive';
            $users->save();

            // save request forgot password
            $userForgotPassword             = new UserForgotPassword();
            $userForgotPassword->users      = $user->id;
            $userForgotPassword->state      = 0;
            $save                           = $userForgotPassword->save();

            if ($save) {
                $status         = 'success';
                $message        = 'Permohonan lupa password akun Anda telah terkirim. Mohon menunggu instruksi atau pemberitahuan dari Administrator';
            } else {
                $status         = 'failed';
                $message        = 'Permohonan lupa password akun Anda gagal dikirim! Silahkan coba lagi';
            }

            return redirect('authentications/forgot')->with(['status' => $status, 'message' => $message]);
        } else {
            // user not found
            return redirect('authentications/forgot')->with(['status' => 'failed', 'message' => 'Pengguna dengan Username atau Email ' . $username . ' tidak ditemukan!']);
        }
    }

    // get list of users on json
    public function get_users_json(): \Illuminate\Http\JsonResponse
    {
        $users      = User::where('deleted_at', null)->get();

        return response()->json([
            'data' => $users
        ]);
    }

    public function get_users_forgot_request_json()
    {
        return response()->json([
            'data'  => []
        ]);
    }

    public function get_reset_password()
    {
        return response()->json([
            'data'  => []
        ]);
    }
}
