<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invitation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected  $data;

    /**
     * Invitation constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->data = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invitation')
            ->with([
                'message' => $this->data['message'],
                'role' => $this->data['role'],
            ]);
    }
}
