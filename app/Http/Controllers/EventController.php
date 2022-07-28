<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{   
    public function index(){
        $name = "Marcos";
        $idade = 49;
        $array = [9,18,27,36,45];
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }
}
