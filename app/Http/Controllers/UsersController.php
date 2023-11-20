<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // get list of users on json
    public function get_users_json(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => []
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
