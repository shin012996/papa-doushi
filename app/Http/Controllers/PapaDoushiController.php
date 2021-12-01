<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PapaDoushiController extends Controller
{
    public function index()
    {
        return view('papa-doushi.index');
    }

    public function consult()
    {
        return view('papa-doushi.consult');
    }

    public function help()
    {
        return view('papa-doushi.help');
    }

    public function about()
    {
        return view('papa-doushi.about');
    }
}
