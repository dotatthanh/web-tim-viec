<?php

namespace App\Jobs;

use App\Mail\ApplyNewJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendApplyNewJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    protected $user;
    protected $idPost;
    protected $category;

    public function __construct($user, $idPost, $category)
    {
        $this->user = $user;
        $this->idPost = $idPost;
        $this->category = $category;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user->email)
            ->send(new ApplyNewJob($this->user->name, $this->idPost, $this->category));
    }
}
