<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Resources\UsersResource;

class UsersControllerApi extends Controller
{
    public function index(Request $request){

        // $schoolid = $request->get('schoolid');
        // $studentid = $request->get('studentid');
        // $email = $request->get('email');
        // $status = $request->get('status');

        // dd($email);
        $users = User::all();

        return new UsersResource($users);
    }
}
