<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        $hotels = Hotel::latest()->limit(13)->get();

        $groupHotels = [];
        $totalItems = $hotels->count();
        $index = 0;
        while ($index < $totalItems) {
            $groupHotels[] = $hotels->slice($index, 3)->toArray();
            $index += 3;
            if ($index < $totalItems) {
                $groupHotels[] = $hotels->slice($index, 2)->toArray();
                $index += 2;
            }
        }

        $sliders = Slider::where('status', 1)->latest()->get();

        return view('frontend.home_page', compact('groupHotels','sliders'));
    }
    public function contact(){
        return view('Frontend.contact');
    }
}
