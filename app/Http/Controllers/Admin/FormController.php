<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankOfIndustryLoan()
    {
        return view('admin.forms.boi.index', [
            'bois' => Form::where('form_type', 'Boi')->latest()->get(),
        ]);
    }
}
