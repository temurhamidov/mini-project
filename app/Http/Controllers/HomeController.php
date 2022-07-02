<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        return view('home');
    }

    
    public function index(){
        return view('about.index');
    }

    public function edit(){
        return view('about.edit');
    }

    public function pro(){
        return view('about.pro');
    }
}
