<?php

namespace App\Http\Controllers;

use App\Models\command;
use App\Models\offers;
use App\Models\User;
use Illuminate\Http\Request;

class adminsController extends Controller
{
    //super admin dashboard
    public function SuperDashboard(){

        $offers = offers::all();
        $comfirmed = command::where('status','=','accepted')->get();
        $providers = User::where('role','=',1)->get();
        $users = User::where('role','=',0)->get();

        return view('super-dashboard',[
            'offers' => $offers,
            'providers' => $providers,
            'users' => $users,
            'confirmed' => $comfirmed
        ]);
    }

    public function deleteProvider($id){
        $Provider = User::find($id);
        $Provider->delete();
        return back()->with('message', 'Provider deleted');
    }

    public function deleteUser($id){
        $User = User::find($id);
        $User->delete();
        return back()->with('message', 'User deleted');
    }

    public function deleteOffer($id){
        $offer = offers::find($id);
        $offer->delete();
        return back()->with('message', 'Offer deleted');
    }

}
