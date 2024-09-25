<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Hotel;
use App\Models\Slider;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
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

        return view('frontend.home_page', compact('hotels', 'groupHotels', 'sliders'));
    }

    public function faqsPage()
    {
        $faqs = Faq::orderBy('order', 'asc')->latest('id')->get();
        return view('frontend.faq_page', compact('faqs'));
    }


    public function contact()
    {
        return view('Frontend.contact');
    }
    public function contact_store(Request $request)
    {

        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('your-email@example.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
