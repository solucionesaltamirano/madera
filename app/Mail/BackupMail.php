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
    public $filename;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $filename)
    {
        $this->filename = $filename;
        $this->subject = 'Backup_'.date('Y-m-d');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.backup');
    }
}
