<?php

namespace App\Http\Controllers;

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
        return view('addForm', [
            'types' => $types
        ]);
    }

    // offers creation 
    public function store(Request $request){

        // $formfield = $request->validate([
        //     'car_image' => '',
        //     'car_make' => '' ,
        //     'car_model' => '' ,
        //     'car_production_year'=> '' ,
        //     'car_engine' => '' ,
        //     'car_power' => '' ,
        //     'car_doors' => '' ,
        //     'car_price' => '' ,
        //     'description' => '' ,
        //     'car_category' => '' ,
        //     'typeoffers_id' => '' ,
        // ]);

        $photo = Cloudinary::uploadFile($request->image->getRealPath(),[
            'folder' => 'CarsPhotos'
        ])->getSecurePath();

        Offers::create([
            'car_image' => $photo,
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
        ]);
        
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
}
