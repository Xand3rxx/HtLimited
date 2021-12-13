<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index', [
            'setting' => Setting::firstOrFail()
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
        $setting = Setting::firstOrFail();

        // Validate user input fields
        $validated = $this->validateRequest();

        //Check if image was uploaded on update
        if ($image = $request->file('site_icon')) {
            //Delete old image
            $oldImage = substr($setting['site_icon'], strrpos($setting['site_icon'], '/' )+1);

            if(File::exists(public_path('img/'.$oldImage)))
            {
                File::delete(public_path('img/'.$oldImage));
            }

            $siteIcon = 'favicon.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/category'), $siteIcon);
            $validated['site_icon'] = url('img/'.$siteIcon);

        }else{
            $validated['site_icon'] = $setting['site_icon'];
        }

        if ($image = $request->file('site_logo')) {
            //Delete old image
            $oldImage = substr($setting['site_logo'], strrpos($setting['site_logo'], '/' )+1);

            if(File::exists(public_path('img/'.$oldImage)))
            {
                File::delete(public_path('img/'.$oldImage));
            }

            $siteLogo = 'logo.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/'), $siteLogo);
            $validated['site_logo'] = url('img/'.$siteLogo);

        }else{
            $validated['site_logo'] = $setting['site_logo'];
        }

        //Uodate site settings configuration file
        $this->updateConfig($validated);

        return (Setting::where('id', 1)->update($validated))
        ? redirect()->back()->with('success', 'The site settings was successfully updated.')
        : back()->with('error', 'Sorry! An error occured while trying to update site settings.');
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
    private function updateConfig($validated){
        Config::set('site-settings', [
            'site_icon'                     =>  $validated['site_icon'],
            'site_logo'                     =>  $validated['site_logo'],
            'site_title'                    =>  $validated['site_title'],
            'site_tagline'                  =>  $validated['site_tagline'],
            'site_description'              =>  $validated['site_description'],
            'website_url'                   =>  $validated['website_url'],
            'email'                         =>  $validated['email'],
            'site_address'                  =>  $validated['site_address'],
            'site_phone_number'             =>  $validated['site_phone_number'],
            'site_alternative_phone_number' =>  $validated['site_alternative_phone_number'],
            'site_working_hours'            =>  $validated['site_working_hours'],
            'facebook_link'                 =>  $validated['facebook_link'],
            'instagram_link'                =>  $validated['instagram_link'],
            'linkedin_link'                 =>  $validated['linkedin_link'],
            'twitter_link'                  =>  $validated['twitter_link'],
            'youtube_link'                  =>  $validated['youtube_link'],
            'youtube_link'                  =>  $validated['youtube_link'],
            'adsense'                       =>  $validated['adsense'],
        ]);
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'site_icon'                     =>  'bail|sometimes|mimes:jpg,png,jpeg,gif,svg|max:256',
            'site_logo'                     =>  'bail|sometimes|mimes:jpg,png,jpeg,gif,svg|max:256',
            'site_title'                    =>  'bail|required|string',
            'site_tagline'                  =>  'bail|sometimes|string|max:180',
            'site_description'              =>  'bail|required|string',
            'website_url'                   =>  'bail|required|string',
            'email'                         =>  'bail|required|email|string',
            'site_address'                  =>  'bail|required|string',
            'site_phone_number'             =>  'bail|required|string|max:14',
            'site_alternative_phone_number' =>  'bail|sometimes|string|max:14',
            'site_working_hours'            =>  'bail|required|string|max:20',
            'facebook_link'                 =>  'bail|sometimes|string',
            'instagram_link'                =>  'bail|sometimes|string',
            'linkedin_link'                 =>  'bail|sometimes|string',
            'twitter_link'                  =>  'bail|sometimes|string',
            'youtube_link'                  =>  'bail|sometimes|string',
            'adsense'                       =>  'bail|sometimes|string',
        ]);
    }
}
