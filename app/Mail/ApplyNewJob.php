<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplyNewJob extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    protected $name;
    protected $idPost;
    protected $category;

    public function __construct($name, $idPost, $category)
    {
        $this->name = $name;
        $this->idPost = $idPost;
        $this->category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('users.notifications.apply-job')
                    ->subject("Có ứng viên mới apply!!!")
                    ->with([
                        'name' => $this->name,
                        'category' => $this->category,
                        'id' => $this->idPost
                    ]);
    }
}
