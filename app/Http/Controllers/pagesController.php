<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\offers;
use App\Models\typeoffer;
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
        $offers = offers::all();
        $type = typeoffer::all();
        return view('marketPlace', [
            'offers' => $offers,
            'types' => $type,
        ]);
    }

    public function cart() {
        $user = User::find(auth()->user()->id);
        $offers = $user->offers;
        
            return view('cart', [
            'offers' => $offers
        ]);
        
        
    }

    public function dashboard() {
        $user = User::find(auth()->user()->id);
        $offers = $user->offers;
        return view('dashboard' , [
            'offers' => $offers
        ]);
    }
    
    public function add(){
        return view('addForm');
    }

    
}
