<?php

namespace App\Jobs;

use App\Mail\NewPost;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendNewPostEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    protected $emailAddr;
    protected $jobInfo;

    public function __construct($email, $jobInfo)
    {
        $this->emailAddr = $email;
        $this->jobInfo = $jobInfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->emailAddr)
            ->send(new NewPost($this->jobInfo));
    }
}
