<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    public function livestream()
    {
        return view('livestream');
    }

    public function pay()
    {
        return view('payment');
    }
}
