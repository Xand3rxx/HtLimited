<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Show the view for an already existing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankOfIndustryLoan()
    {
        return view('frontend.business-development.access-to-finance.bank-of-industry-loan', [
            'states'    =>  \App\Models\State::orderBy('name', 'ASC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendContactUsMail(Request $request)
    {
        //Validate user contact request
        $validated = $request->validate([
            'full_name'             =>  'bail|required|string|max:180',
            'email'                 =>  'bail|required|email|string',
            'subject'               =>  'bail|required|string|max:180',
            'message'               =>  'bail|required|string',
            'g-recaptcha-response'  =>  'bail|required|recaptchav3:contact_us,0.5'
        ]);

        Mail::send(new \App\Mail\ContactUs($validated));
        Mail::send(new \App\Mail\GuestContactUs($validated));

        return back()->with('success', 'Your message was sent successfully. Thank you for contacting us.');
    }
}
