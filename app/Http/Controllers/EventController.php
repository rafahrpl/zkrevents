<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{   
    public function index(){
        $name = "Marcos";
        $idade = 49;
        $array = [9,18,27,36,45];
        return view('welcome', [
            'name' => $name, 
            'idade' => $idade,
            'array' => $array
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
