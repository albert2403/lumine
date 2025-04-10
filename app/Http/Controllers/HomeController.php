<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function services()
    {
        return view("services");
    }

    public function contact()
    {
        return view("contact");
    }
}
