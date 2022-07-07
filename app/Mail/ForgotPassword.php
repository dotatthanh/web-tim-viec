<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    protected $newPass;

    public function __construct($newPass)
    {
        $this->newPass = $newPass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('users.notifications.forgot-password')
                    ->with([
                            'newPass' => $this->newPass
                            ])
                    ->subject("Lấy lại mật khẩu");
    }
}
