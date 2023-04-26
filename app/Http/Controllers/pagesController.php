<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\offers;
use App\Models\typeoffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function cart(){

        $id = auth()->user()->id;

        $commands   =   DB::table('commands')
                        ->join('offers','commands.offer_id','=', 'offers.id')
                        ->where('commands.user_id','=',$id)
                        ->where('commands.status','=','Pending')
                        ->get();

        if(count($commands)>0){
            return view('cart', [
            'offers' => $commands
        ]); 
        }else{
            return back()->with('message','Your cart is still empty');
        }
               
    }

    public function Confirmedcart(){

        $id = auth()->user()->id;

        $commands   =   DB::table('commands')
                        ->join('offers','commands.offer_id','=', 'offers.id')
                        ->where('commands.user_id','=',$id)
                        ->where('commands.status','=','accepted')
                        ->get();
                        // dd($commands);

        if(count($commands)>0){
            return view('cart-confirmed', [
            'offers' => $commands
        ]); 
        }else{
            return back()->with('message','Your No confirmed orders');
        }
    }
    
    public function add(){
        return view('addForm');
    }

    
}
