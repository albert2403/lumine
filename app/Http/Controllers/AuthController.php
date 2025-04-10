<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view("auth.login");
    }

    public function showRegis()
    {
        return view("auth.register");
    }

    public function profile()
    {
        return view("profile");
    }
}
