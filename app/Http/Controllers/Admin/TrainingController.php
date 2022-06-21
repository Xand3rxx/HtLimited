<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function startYourBusiness()
    {
        return view('admin.training.start-your-business', [
            'trainings' => Training::where('training_type', 'Start your business')->latest()->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function improveYourBusiness()
    {
        return view('admin.training.improve-your-business', [
            'trainings' => Training::where('training_type', 'Improve your business')->latest()->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function businessContinuityPlan()
    {
        return view('admin.training.business-continuity-plan', [
            'trainings' => Training::where('training_type', 'Business continuity plan')->latest()->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function freeOnlineStartYourBusiness()
    {
        return view('admin.training.start-your-business', [
            'trainings' => Training::where('training_type', 'Start your business')->latest()->get(),
        ]);
    }
}
