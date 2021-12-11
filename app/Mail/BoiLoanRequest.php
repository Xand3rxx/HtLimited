<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BoiLoanRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $loanRequestData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($loanRequestData)
    {
        $this->loanRequestData = $loanRequestData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.boi-loan-request')
        ->subject('Application for '. $this->loanRequestData['form_type'] .' loan request')
        ->with('loanRequestData', $this->loanRequestData);
    }
}
