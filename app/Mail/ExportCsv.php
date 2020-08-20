<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExportCsv extends Mailable
{
    use Queueable, SerializesModels;

    protected $csvPath;

    /**
     * Create a new message instance.
     *
     * @param  string  $csvPath
     * @return void
     */
    public function __construct(string $csvPath)
    {
        $this->csvPath = $csvPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sendCSV')
            ->attach(public_path('storage/'.$this->csvPath), [
                'as' => 'export.csv',
                'mime' => 'text/csv',
            ]);
    }
}
