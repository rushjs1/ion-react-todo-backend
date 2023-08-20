<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id): User
    {
        ray("foo");

        $user = User::where('id', $id)->first();

        ray($user);

        return $user;
    }

    public function store(Request $request): User
    {
        $validated = $request->validate(
            [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
            ]
        );

        $user = User::create(
            [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
             ]
        );

        return $user;
    }
}
