<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }

    public function contact(){
        return View('contact');
    }

    public function servcies(){
        return View('services');
    }

    public function team(){
        return View('team');
    }
}
