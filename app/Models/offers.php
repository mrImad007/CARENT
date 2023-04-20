<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
