<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
    public function home(){
        return view('homee');

    }
    public function page1(){
        return view('page1');
    }
    public function page2(){
        return view('page2');
    }
    //
}
