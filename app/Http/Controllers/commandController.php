<?php

namespace App\Http\Controllers;

use App\Models\offers;
use App\Models\command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class commandController extends Controller
{

    public function createCommand(){

        $id  = request()->query('id');

        $formField = [
            'offer_id' => $id,
            'user_id' => auth()->user()->id,
        ];

        command::create($formField);
        return redirect('/cart')->with('message', 'Waiting for providers confirmation');
    }

    public function ConfirmOffer(){

        $id = request()->query('id');
        
        DB::table('commands')
        ->where('commands.offer_id', $id)
        ->update(['status' => 'accepted']);


        return redirect('/confirmedOffers')->with('message','offer accepted');
    }

    public function DeclineOffer() {

        $id = request()->query('id');

        $offer = command::where('offer_id','=',$id);
        $offer->delete();

        return back()->with('message', 'Offer Declined');
    }

    public function DeclineOfferCart() {

        $id = request()->query('id');

        $offer = command::where('offer_id','=',$id);
        $offer->delete();

        return redirect('/market')->with('message', 'Offer Declined');
    }

    
}
