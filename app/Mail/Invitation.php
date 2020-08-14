<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invitation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected  $inviteData;

    /**
     * Invitation constructor.
     * @param $request
     */
    public function __construct($array)
    {
        $this->inviteData = $array;
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
                'role' => $this->inviteData['role'],
                'email' => $this->inviteData['email'],
                'name' => $this->inviteData['name'],
                'surname' => $this->inviteData['surname'],
                'password' => $this->inviteData['password'],
            ]);
    }
}
