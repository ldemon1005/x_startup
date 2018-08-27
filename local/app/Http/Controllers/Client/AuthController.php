<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function form_login(){
        return view('client.auth.login');
    }


    function form_register(){
        return view('client.auth.signup');
    }
}
