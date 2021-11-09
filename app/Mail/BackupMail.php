<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BackupMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $file;
    public $filename;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file, $filename)
    {
        $this->file = $file;
        $this->filename = $filename;
        $this->subject = $filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.backup')
        ->attach($this->file);
    }
}
