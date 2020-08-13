<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $newAdmin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($array)
    {
        $this->newAdmin = $array;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notification')
            ->with([
                'name' => $this->newAdmin['name'],
                'surname' => $this->newAdmin['surname'],
                'email' => $this->newAdmin['email'],
            ]);;
    }
}
