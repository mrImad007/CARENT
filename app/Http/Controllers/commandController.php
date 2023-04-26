<?php

namespace App\Http\Controllers;

use App\Models\offers;
use App\Models\command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

    public function createRentCommand(Request $request){

        // $id  = request()->query('id');

        $formField = [
            'offer_id' => $request->id,
            'user_id' => auth()->user()->id,
            'ending' => $request->ending,
            'starting' => $request->starting,
        ];
        
        if($formField['ending'] >= $formField['starting']){

            $start_date = Carbon::createFromFormat('Y-m-d', $request->starting);
            $end_date = Carbon::createFromFormat('Y-m-d', $request->ending);
            $number_of_days = $end_date->diffInDays($start_date);

            if($number_of_days == 0){
                $formField['total_rent'] = $request->price;
            }else{
                $formField['total_rent'] = $number_of_days * $request->price;
            }
            command::create($formField);
            return redirect('/cart')->with('message', 'Waiting for providers confirmation');
        }else{
            return back()->with('message', 'check the dates');
        }
       
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

        return redirect('/market')->with('message', 'Offer Canceled');
    }

    
}
