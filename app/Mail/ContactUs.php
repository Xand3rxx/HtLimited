<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.contact')
            ->from($this->data['email'])
            ->to(config('smtp-settings.smtp_mail_username'))
            // ->to('info@ht-limitedng.net')
            ->subject($this->data['full_name'] .' contacted HT Limited')
            ->with('data', $this->data);
    }
}
