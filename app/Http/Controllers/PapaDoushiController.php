<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PapaDoushiController extends Controller
{
    public function index()
    {
        return view('papa-doushi.index');
    }

    public function post()
    {
        return view('papa-doushi.post');
    }

    public function help()
    {
        return view('papa-doushi.help');
    }

    public function about()
    {
        return view('papa-doushi.about');
    }

    public function users()
    {
        return view('papa-doushi.users');
    }
}
