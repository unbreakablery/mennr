<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetFreeDemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->client = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Get A Free Demo')
                    ->view('emails.get_free_demo')
                    ->with([
                        'first_name' => $this->client['first_name'],
                        'last_name' => $this->client['last_name'],
                        'email' => $this->client['email'],
                        'phone' => $this->client['phone'],
                        'business_name' => $this->client['business_name'],
                        'business_type' => $this->client['business_type'],
                        'employees' => $this->client['employees']
                    ]);
    }
}
