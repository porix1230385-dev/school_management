<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordManager extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $new_pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $new_pass)
    {
        $this->user = $user;
        $this->new_pass = $new_pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // View to display in the mail
        $this->view('emails.reset-password-mail')->with([
            'user' => $this->user,
            'new_pass' => $this->new_pass,
        ]);
        // Mail message
        // $this->withSwiftMessage(function ($message) {
        //     $message->getHeaders()->addTextHeader('Custom-Header', 'Header Value');
        // });

        return $this;
    }
}
