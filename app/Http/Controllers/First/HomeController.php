<?php

namespace App\Http\Controllers\First;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }
}