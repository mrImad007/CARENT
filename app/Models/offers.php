<?php

namespace App\Models;

use App\Models\command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id' ,
        'car_image'  ,
        'car_make' ,
        'car_model' ,
        'car_production_year',
        'car_engine' ,
        'car_power' ,
        'car_doors' ,
        'car_price' ,
        'description' ,
        'car_category' ,
        'typeoffer_id' ,
    ];

    public function typeOffer()
    {
        return $this->belongsTo(TypeOffer::class, 'typeoffers_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commands()
    {
        return $this->belongsTo(command::class,'offer_id','id');
    }
}
