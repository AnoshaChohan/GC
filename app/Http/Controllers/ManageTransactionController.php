<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageTransactionController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('manageTransaction.home');
    }

    public function showProjection()
    {
        return view('manageTransaction.projection');
    }
}
