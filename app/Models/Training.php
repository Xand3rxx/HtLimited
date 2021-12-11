<?php

namespace App\Models;

use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    const TYPE = ['Start your business', 'Improve your business', 'Business continuity plan'];

    protected $fillable = [
        'full_name', 'business_name', 'location', 'email', 'phone_number', 'expectation', 'training_type'
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
        static::created(function ($training) {
            Mail::to($training['email'])
            ->send(new \App\Mail\Training($training ));
        });
    }
}
