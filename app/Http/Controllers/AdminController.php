<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }

    public function checkin()
    {
        return view("admin.checkin");
    }

    public function showQr()
    {
        return view("admin.show");
    }
}
