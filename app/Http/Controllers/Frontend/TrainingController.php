<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validateRequest();

        //Set `createTraining` to false before Db transaction
        (bool) $createTraining  = false;

        DB::transaction(function () use ($validated, &$createTraining) {
            \App\Models\Training::create([
                'full_name'     =>  $validated['full_name'],
                'business_name' =>  $validated['business_name'],
                'location'      =>  $validated['location'],
                'email'         =>  $validated['email'],
                'phone_number'  =>  $validated['phone_number'],
                'expectation'   =>  $validated['expectation'],
                'training_type' =>  $validated['training_type']
            ]);

            $createTraining =  true;
        }, 3);

        return ($createTraining)
        ? redirect()->back()->with('success', 'Congratulations! You have successfully registered for the '. $validated['training_type'].' training.')
        : back()->with('error', 'Sorry! An error occured while trying to register for this training.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'full_name'     =>  'bail|required|string',
            'business_name' =>  'bail|required|string',
            'location'      =>  'bail|required|string',
            'email'         =>  'bail|required|email|string',
            'phone_number'  =>  'bail|required|string|min:11|max:15',
            'expectation'   =>  'bail|required|string',
            'training_type' =>  'bail|required|string|in:Start your business,Improve your business,Business continuity plan',
        ]);
    }
}
