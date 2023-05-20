<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function html5()
    {
        return view('html5');
    }

    public function css3()
    {
        return view('css3');
    }

    public function bootstrap()
    {
        return view('bootstrap');
    }
}

    
