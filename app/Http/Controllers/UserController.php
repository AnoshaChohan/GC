<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
class UserController extends Controller
{
    public function index() {
        return view('profile');
    }
}
