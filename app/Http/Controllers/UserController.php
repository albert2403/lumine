<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("user.dashboard");
    }

    public function createEvent()
    {
        return view("user.create_event");
    }

    public function listEvents()
    {
        return view("user.list_events");
    }
}
