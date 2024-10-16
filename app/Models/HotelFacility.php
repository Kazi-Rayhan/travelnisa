<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelFacility extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_hotel_facilitie', 'hotel_facilitie_id', 'hotel_id')->withPivot(['attributes']);
    }
}
