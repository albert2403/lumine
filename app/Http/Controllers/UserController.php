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

    public function editEvent()
    {
        return view("user.edit_event");
    }

    public function addGuests()
    {
        return view("user.add_guests");
    }
}
