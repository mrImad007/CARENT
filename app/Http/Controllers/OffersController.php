<?php

namespace App\Http\Controllers;

use App\Models\offers;
use App\Models\typeoffer;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class OffersController extends Controller
{
    public function createform(){
        $types = typeoffer::all();
        // dd($type);
        return view('addForm', [
            'types' => $types
        ]);
    }

    public function store(Request $request){
        
        // $formfield = $request->validate([
        //     'car_image' => 'required',
        //     'car_make' => 'required',
        //     'car_model' => 'required',
        //     'car_production_year'=> 'required',
        //     'car_engine' => 'required',
        //     'car_power' => 'required',
        //     'car_doors' => 'required',
        //     'car_price' => 'required',
        //     'description' => 'required',
        //     'car_category' => 'required',
        //     'typeoffer_id' => 'required',
        // ]);

        $formfield = ([
            'user_id' => auth()->id(),
            'car_image' => $request->image,
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
        ]);

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
        
        return redirect('/')->with('message', 'post succesfully created ');
    }
}
