<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function show(Hotel $hotel){
        $similar_rooms = Hotel::latest()->limit(9)->get();
        return view('frontend.single_hotel', compact('hotel', 'similar_rooms'));
    }
}
