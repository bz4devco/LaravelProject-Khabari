<?php

namespace App\Http\Services\Message\Email;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailViewProvider extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $files;
    public $publicFiles = [];

    public function __construct($details, $subject, $from, $files = null)
    {
        $this->details = $details;
        $this->subject = $subject;
        $this->from = $from;
        $this->files = $files;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('emails.welcome-register');
    }

    public function attachments()
    {

        if($this->files)
        {
            foreach($this->files  as $file)
            {
                array_push($this->publicFiles, public_path($file));
            }
        }
        return $this->publicFiles;
    }
}

?>