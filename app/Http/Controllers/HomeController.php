<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        return view('home');

    }

    public function welcome()
    {
        $coach = User::findOrFail(1);
        return view('welcome', compact('coach'));
    }
}
