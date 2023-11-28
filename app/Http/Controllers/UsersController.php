<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
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
            ->where('state', 'active')
            ->where('username', $username)
            ->orWhere('email', $username)
            ->whereNull('deleted_at')->first();

        if (!empty($user)) {
            if ($user->role === 'consultant') {
                $consultant     = Consultant::where('account', $user->id)->first();
                session(['refer' => $consultant->refer]);
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
