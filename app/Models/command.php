<?php

namespace App\Models;

use App\Models\offers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class command extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'user_id'
    ];

    public function offers()
    {
        return $this->hasMany(offers::class,'id');
    }
}
