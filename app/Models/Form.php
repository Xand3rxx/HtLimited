<?php

namespace App\Models;

use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    const TYPES = ['Boi', 'Others'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['deleted_at', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'form_data' => 'array',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        parent::boot();

        //Send confirmation email after loan request was successfully submitted.
        static::created(function ($loanRequest) {

        $mailData = collect([
            'full_name' => $loanRequest['form_data']['first_name'].' '.$loanRequest['form_data']['surname'],
            'form_type' => $loanRequest['form_data']['form_type'],
            'email'     => $loanRequest['form_data']['email'],
        ]);

            Mail::to($loanRequest['email'])
            ->send(new \App\Mail\BoiLoanRequest($mailData));
        });
    }
}
