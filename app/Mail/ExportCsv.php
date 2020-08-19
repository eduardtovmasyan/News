<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExportCsv extends Mailable
{
    use Queueable, SerializesModels;

    protected $csv;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($csv)
    {
        $this->csv = $csv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sendCSV')
                    ->attach(public_path($this->csv), 
                    [
                        'as' => 'sample.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
