<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the view for an already existing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankOfIndustryLoan()
    {
        return view('frontend.business-development.bank-of-industry-loan', [
            'states'    =>  \App\Models\State::orderBy('name', 'ASC')->get()
        ]);
    }
}
