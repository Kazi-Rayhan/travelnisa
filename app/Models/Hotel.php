<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Str;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'freeServices' => 'array',
        'paidServices' => 'array',
        'images' => 'array',
    ];

    // public function getRouteKey()
    // {
    //     return Str::slug($this->name) . '-' . $this->id;
    // }

    // public function resolveRouteBinding($value, $field = null)
    // {
    //     $id = last(explode('-', $value));
    //     $model = parent::resolveRouteBinding($id, $field);
    //     if (!$model) abort(404);
    //     if ($model->getRouteKey() == $value) {
    //         return $model;
    //     }
    //     throw new HttpResponseException(redirect()->to(route(request()->route()->getName(), $model)));
    // }

    public function facilities()
    {
        return $this->belongsToMany(HotelFacility::class, 'hotel_hotel_facilitie', 'hotel_id', 'hotel_facilitie_id');
    }


    public function hotelClass()
    {
        if ($this->hotel_class == '2 Star') {
            return '<i class="star-rating"></i> <i class="star-rating"></i>';
        } elseif ($this->hotel_class == '3 Star') {
            return '<i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i>';
        } elseif ($this->hotel_class == '4 Star') {
            return '<i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i>';
        } else {
            return '<i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i> <i class="star-rating"></i>';
        }
    }
}
