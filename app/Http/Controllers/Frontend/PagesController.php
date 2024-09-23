<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {

        // Retrieve the latest hotels
        $hotels = Hotel::latest()->limit(13)->get();

        $groupHotels = [];
        $totalItems = $hotels->count();
        $index = 0;

        // Loop through the hotels and structure them
        while ($index < $totalItems) {
            // Add the first 3 items
            $groupHotels[] = $hotels->slice($index, 3)->toArray();
            $index += 3;

            // Check if there are enough items left for the next 6 items
            if ($index < $totalItems) {
                $groupHotels[] = $hotels->slice($index, 2)->toArray();
                $index += 2;
            }
        }


        return view('frontend.home_page', compact('groupHotels',));
    }
}
