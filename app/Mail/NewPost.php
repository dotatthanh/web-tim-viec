<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    protected $jobInfo;

    public function __construct($jobInfo)
    {  
        $this->jobInfo = $jobInfo;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->jobInfo["category"]." : Làm chủ với mức lương khủng ".$this->jobInfo["salary"];
        return $this->view('users.notifications.new-post')
                    ->subject($subject)
                    ->with([
                        'jobCate' => $this->jobInfo["category"],
                        'company' => $this->jobInfo["company"],
                        'address' => $this->jobInfo["address"],
                        'salary' => $this->jobInfo["salary"],
                        'id' => $this->jobInfo["id"]
                    ]);
    }
}
