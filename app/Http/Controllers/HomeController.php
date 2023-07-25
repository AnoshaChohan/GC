<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function showAbout()
    {
        return view('about');
    }

    public function showContact()
    {
        return view('contact');
    }
}
