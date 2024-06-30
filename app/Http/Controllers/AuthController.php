<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController
{
   public function index(){
    return view('user.register');
   }

   public function login(){
    return view('user.login');
   }
}
