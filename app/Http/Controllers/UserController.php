<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data = ["users"=>$users];
        return view('dashboard.users.index',$data);
    }

    public function edit(User $user)
    {
        return view('dashboard.users.update')->with('user',$user);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ];

        $data = $this->validate($request, $rules);

        $user->update($data);

        return Response::redirectTo('/users ');
    }

//    public function destroy(User $user)
//    {
//        $user->delete();
//        return Response::redirectTo('/users');
//    }
}
