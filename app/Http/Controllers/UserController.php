<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function show($id){
    ray("foo");

    $user = User::where('id', $id)->first();

    ray($user);

    return $user;
  }

  public function store(Request $request){
    ray('foo');
    ray($request->all());
  }
}
