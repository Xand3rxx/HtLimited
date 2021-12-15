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

    /**
     * Display the specified resource.
     *
     * @param  int  $uuid
     * @return \Illuminate\Http\Response
     */
    public function showBankOfIndustryLoan($uuid)
    {
        //Return $data to partial cateogory view
        return view('admin.forms.boi.show', [
            'boi'   =>  Form::where('uuid', $uuid)->firstOrFail()
        ]);
    }

     /**
     * Aprrove the specified uuid from storage.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function approveBankOfIndustryLoan($uuid)
    {
        //Change boi loan status to approved state
        return (Form::where('uuid', $uuid)->firstOrFail()->update(['status'=>'Approved']))
        ? redirect()->back()->with('success', 'BOI loan was successfully published.')
        : back()->with('error', 'Sorry! An error occured while trying to approve BOI loan.');
    }

    /**
     * Decline the specified uuid from storage.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function declineBankOfIndustryLoan($uuid)
    {
        //Change boi loan status to declined state
        return (Form::where('uuid', $uuid)->firstOrFail()->update(['status'=>'Declined']))
        ? redirect()->back()->with('success', 'BOI loan was successfully declined.')
        : back()->with('error', 'Sorry! An error occured while trying to decline BOI loan.');
    }
}
