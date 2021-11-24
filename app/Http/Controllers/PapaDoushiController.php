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

    public function consult()
    {
        return view('papa-doushi.consult');
    }

    public function wiki()
    {
        return view('papa-doushi.wiki');
    }

    public function q_a()
    {
        return view('papa-doushi.q_a');
    }

    public function help()
    {
        return view('papa-doushi.help');
    }
}
