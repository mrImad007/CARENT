<?php

namespace App\Http\Controllers;

use App\Models\command;
use App\Models\User;
use App\Models\offers;
use App\Models\typeoffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OffersController extends Controller
{
    // creation form 
    public function createform(){
        $types = typeoffer::all();
        return view('offers.addForm', [
            'types' => $types
        ]);
    }

    //dashboard
    public function dashboard() {
        
        $id = auth()->user()->id;
        
        $offers = DB::table('offers')
                ->join('typeoffers','typeoffers.id','=','offers.typeoffers_id')
                ->select('offers.*','typeoffers.*','offers.id')
                ->where('offers.user_id', $id)
                ->get();
                // dd($offers);

        return view('dashboard' , [
            'offers' => $offers
        ]);
    }

    public function confirmedOffers(){

        $id = auth()->user()->id;
        
        $offers = DB::table('offers')
                ->join('commands', 'commands.offer_id', '=', 'offers.id')
                ->join('typeoffers','typeoffers.id','=','offers.typeoffers_id')
                ->where('offers.user_id', $id)
                ->select('offers.*','typeoffers.*')
                ->where('commands.status', 'accepted')
                ->get();

        return view('dashboard-confirmed' , [
            'offers' => $offers
        ]);
    }

    public function pendingOffers(){

        $id = auth()->user()->id;
        
        $offers = DB::table('offers')
                ->join('commands', 'commands.offer_id', '=', 'offers.id')
                ->join('typeoffers','typeoffers.id','=','offers.typeoffers_id')
                ->where('offers.user_id', $id)
                ->where('commands.status', 'Pending')
                ->where('offers.typeoffers_id','=','1')
                ->get();

        $rents = DB::table('offers')
                ->join('commands', 'commands.offer_id', '=', 'offers.id')
                ->join('typeoffers','typeoffers.id','=','offers.typeoffers_id')
                ->where('offers.user_id', $id)
                ->where('commands.status', 'Pending')
                ->where('offers.typeoffers_id','=','2')
                ->get();


        return view('dashboard-pending' , [
            'offers' => $offers,
            'rents' => $rents
        ]);
    }

    public function editForm(){
        
        $types = typeoffer::all();

        $id = request()->query('id');
        
        $offer = DB::table('offers')
                 ->where('id','=',$id)
                 ->first();

        $types = typeoffer::all();

        return view('offers.editForm', [
            'types' => $types,
            'offer' => $offer 
        ]);
    }

    // offers creation 
    public function store(Request $request){

        $formField = [
            'car_make' => $request->car_make,
            'car_model' => $request->car_model,
            'car_production_year'=> $request->car_production_year,
            'car_engine' => $request->car_engine,
            'car_power' => $request->car_power,
            'car_doors' => $request->car_doors,
            'car_price' => $request->car_price,
            'description' => $request->description,
            'car_category' => $request->car_category,
            'typeoffers_id' => $request->typeoffer_id,
            'user_id' => auth()->id(),
        ];

        $photo = Cloudinary::uploadFile($request->image->getRealPath(),[
            'folder' => 'CarsPhotos'
        ])->getSecurePath();

        $formField['car_image'] = $photo;

        Offers::create($formField);
        
        return redirect('/market')->with('message', 'post succesfully created ');
    }

    //regular search
    public function search(Request $request){

        $formfield = $request->validate([
            'search' => 'required'
        ]);

        $offers = offers::where('car_make', 'LIKE' , '%'.$formfield['search'].'%')->with('typeoffer')->get();
        $types = typeoffer::all();

        if(count($offers)>0){
            return view('search-market', [
            'offers' => $offers,
            'types' => $types
        ]);
        }else{
            return redirect('/market')->with('message', 'No offers found');
        }
        
    }

    //search by category
    public function categorySearch(){

        $search = request()->query('search');
        
        $offers = DB::table('offers')
                  ->where('car_category','LIKE','%'.$search.'%')
                  ->get();

        $types = typeoffer::all();

        if(count($offers)>0){
            return view('search-market', [
            'offers' => $offers,
            'types' => $types
        ]);
        }else{
            return redirect('/market')->with('message', 'No offers found');
        }
    }  
    
    //search by offer type
    public function offerTypeSearch(){

        $search = request()->query('search');
        
        $offers = DB::table('offers')
                  ->join('typeoffers', 'offers.typeoffers_id', '=', 'typeoffers.id')
                  ->where('offers.typeoffers_id', '=', $search)
                  ->select('offers.*')
                  ->get();

        $types = typeoffer::all();

        if(count($offers)>0){
            return view('search-market', [
            'offers' => $offers,
            'types' => $types
        ]);
        }else{
            return redirect('/market')->with('message', 'No offers found');
        }
    }  

    //delete offer
    public function DeleteOffer($id) {
        $offer = offers::find($id);
        $offer->delete();
        return back()->with('message', 'Offer deleted');
    }

    //store edited infos
    public function StoreEditOffer(Request $request, offers $offer){
        
        $formField = [
            'car_make' => $request->car_make ,
            'car_model' => $request->car_model ,
            'car_production_year'=> $request->car_production_year ,
            'car_engine' => $request->car_engine ,
            'car_power' => $request->car_power ,
            'car_doors' => $request->car_doors ,
            'car_price' => $request->car_price ,
            'description' => $request->description ,
            'car_category' => $request->car_category ,
            ];

        if ($request->hasFile('image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'CarsPhotos'
            ])->getSecurePath();
            $formField['car_image'] = $uploadImage;
        }

        $offer->update($formField);

        return redirect('/dashboard')->with('message', 'Offer Updated');
    }

    //show single product
    public function singleOffer(){
       
        $id = request()->query('id');

        $offer = DB::table('offers')
            ->join('users', 'offers.user_id', '=', 'users.id')
            ->select('offers.*', 'users.*')
            ->where('offers.id', '=', $id)
            ->first();

        if($offer->typeoffers_id == 1){

            return view('single',[
            'offer' => $offer,
            'id' => $id
        ]);

        }else{

            return view('single-Rent',[
                'offer' => $offer,
                'id' => $id
            ]);
        }
    }
}
