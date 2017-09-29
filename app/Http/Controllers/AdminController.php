<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function home_menu()
    {
    	return view('home_menu');
    }

    public function register_1()
    {
    	return view('register_1');
    }
}
