<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog() {
        return view('blog');
    }

    public function market() {
        return view('marketPlace');
    }

    public function cart() {
        return view('dashboard');
    }

    public function dashboard() {
        return view('dashboard');
    }
}
