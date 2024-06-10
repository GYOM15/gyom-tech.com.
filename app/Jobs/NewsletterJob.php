<?php

namespace App\Jobs;

use App\Mail\NewsLetter;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class NewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data= $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mailable = new NewsLetter($this->data);
        Mail::to('calebkoffi21@gmail.com')->send($mailable);
    }
}
