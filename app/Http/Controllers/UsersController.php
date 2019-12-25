<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //注册
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show' , compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:50',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|confiremd|min:6'
            ]);
        return;
    }

}
