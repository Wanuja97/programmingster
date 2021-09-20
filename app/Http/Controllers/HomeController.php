<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function privacy(){
        return view('privacypolicy');
    }

    public function contact(){
        return view('contact');
    }
}
