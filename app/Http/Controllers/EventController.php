<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gabriel";
        $idade = 28;
        $arr = [1, 2, 3, 4, 5];
        $nomes = ['Maria', 'José', 'João'];

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'arr' => $arr, 'nomes' => $nomes]);

    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }
}
