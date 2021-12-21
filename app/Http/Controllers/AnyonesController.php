<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnyonesController extends Controller
{
    public function help()
    {
        return view('anyone.help');
    }

    public function about()
    {
        return view('anyone.about');
    }
}
