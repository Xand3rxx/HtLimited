<?php

namespace App\Http\Controllers\Frontend;

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
        // return $request->all();

        //Validate user Boi form request
        $validated = $this->validateBoiRequest();

        if ($request->hasFile('cac_certificate')) {
                $validated = array_merge($validated,
                [
                    'cac_certificate' => $validated['cac_certificate']->store('files/boi-uploads', 'public')
                ]
            );
        }

        return (Form::create(
            [
                'email'=> $validated['email'],
                'form_type' => Form::TYPES[0],
                'form_data' => $validated
            ]
        ))
            ? back()->with('success', 'BOI loan request has been submitted successfully.')
            : back()->with('error', 'Sorry! An error occured while trying to submit your BOI loan request.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * This is an ajax call to get a list of L.G.A's of a particular state.
     * Present on change of state list select dropdown
     */
    public function lgaList(Request $request)
    {
        if ($request->ajax()) {
            $lgas =  \App\Models\State::where('name', $request->only('state'))->with('lgas')->first();

            $optionValue = '';
            $optionValue .= "<option value='' selected>Select L.G.A</option>";
            foreach ($lgas['lgas'] as $lga) {
                $optionValue .= "<option value='$lga->name' {{ old('lga') == $lga->name ? 'selected' : ''}}>$lga->name</option>";
            }

            $data = array(
                'lgaList' => $optionValue
            );

            return response()->json($data);
        }
    }

    /**
     * Validate user input fields
     */
    private function validateBoiRequest(){
        return request()->validate([
            'loan_type'                 =>  'bail|required|string',
            'surname'                   =>  'bail|required|string',
            'first_name'                =>  'bail|required|string',
            'email'                     =>  'bail|required|email|string|unique:forms,email',
            'state'                     =>  'bail|required|string',
            'lga'                       =>  'bail|required|string',
            'phone_number'              =>  'bail|required|string|min:11|max:15',
            'alternative_phone_number'  =>  'bail|sometimes|string|min:11|max:15|nullable',
            'residential_address'       =>  'bail|required|string',
            'business_name'             =>  'bail|required|string',
            'business_name_reg_status'  =>  'bail|required|string',
            'cac_reg_status'            =>  'bail|required|string',
            'business_email'            =>  'bail|required|email|string',
            'official_phone_number'     =>  'bail|required|string|min:11|max:15',
            'official_phone_number_2'   =>  'bail|sometimes|string|min:11|max:15|nullable',
            'industry_sector'           =>  'bail|required|string',
            'industry_sector'           =>  'bail|required|string',
            'industry_sector'           =>  'bail|required|string',
            'products'                  =>  'bail|required|string',
            'equipment_used'            =>  'bail|required|string',
            'years_of_operation'        =>  'bail|required|string',
            'staff_strength'            =>  'bail|required|string',
            'loan_sum'                  =>  'bail|required|numeric',
            'purpose_of_loan'           =>  'bail|required|string',
            'purpose_of_loan'           =>  'bail|required|string',
            'loan_request_agreement'    =>  'bail|required|string|in:Yes,No',
            'purpose_of_loan'           =>  'bail|required|string',
            'form_type'                 =>  'bail|required|string|in:Boi,Others',
            'cac_certificate'           =>  'bail|required|max:3000|mimes:doc,docx,pdf,txt',
            // 'cac_certificate'           =>  'bail|required|max:3000|mimetypes:application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ]);
    }
}
