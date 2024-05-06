<?php
// HomeController.php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function index(){


        $events = Event::all();
        // return view('welcome', ['events' => $events]);
        return view('home.home', ['events' => $events]);
    }



}
