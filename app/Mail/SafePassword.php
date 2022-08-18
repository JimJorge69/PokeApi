<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SafePassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $newPassword;

    public function __construct($user,$newPassword)
    {
        $this->user=$user;
        $this->newPassword=$newPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.safePassword');
    }
}
