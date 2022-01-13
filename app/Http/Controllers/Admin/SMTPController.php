<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\SMTP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SMTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.smtp.index', [
            'smtp' => SMTP::firstOrFail()
        ]);
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
         // Validate user input fields
         $validated = $this->validateRequest();

         $validated['smtp_mail_password'] = base64_encode($validated['smtp_mail_password']);

         $smtp = SMTP::updateOrCreate(
            ['id'    =>  1,],
            [
                'smtp_mailer'          =>  $validated['smtp_mailer'],
                'smtp_mail_host'       =>  $validated['smtp_mail_host'],
                'smtp_mail_port'       =>  $validated['smtp_mail_port'],
                'smtp_mail_username'   =>  $validated['smtp_mail_username'],
                'smtp_mail_password'   =>  $validated['smtp_mail_password'],
                'smtp_mail_encryption' =>  $validated['smtp_mail_encryption']
            ],

        );

        $setting = SMTP::firstOrFail();

        Config::set('mail.mailers.smtp.transport', $setting['smtp_mailer']);
        Config::set('mail.mailers.smtp.host', $setting['smtp_mailer']);
        Config::set('mail.mailers.smtp.username', $setting['smtp_mail_username']);
        Config::set('mail.mailers.smtp.password', base64_decode($setting['smtp_mail_password']));
        Config::set('mail.mailers.smtp.port', $setting['smtp_mail_port']);
        Config::set('mail.mailers.smtp.encryption', $setting['smtp_mail_encryption']);

        return ($smtp)
        ? redirect()->back()->with('success', 'The smtp settings was successfully updated.')
        : back()->with('error', 'Sorry! An error occured while trying to update smtp settings.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SMTP  $sMTP
     * @return \Illuminate\Http\Response
     */
    public function show(SMTP $sMTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SMTP  $sMTP
     * @return \Illuminate\Http\Response
     */
    public function edit(SMTP $sMTP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SMTP  $sMTP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SMTP $sMTP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SMTP  $sMTP
     * @return \Illuminate\Http\Response
     */
    public function destroy(SMTP $sMTP)
    {
        //
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'smtp_mailer'           =>  'bail|required|string|in:smtp,postmark,mailgun,sendmail',
            'smtp_mail_host'        =>  'bail|required|string',
            'smtp_mail_port'        =>  'bail|required|numeric|in:465,587,2525,3306',
            'smtp_mail_username'    =>  'bail|required|string',
            'smtp_mail_password'    =>  'bail|required|string',
            'smtp_mail_encryption'  =>  'bail|required|string|in:none,ssl,tls',
        ]);
    }
}
