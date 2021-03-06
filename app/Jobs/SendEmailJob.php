<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendBryteMail;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $send_mail;
    protected $name;
    protected $template;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_mail, $name, $template)
    {
        $this->send_mail = $send_mail;
        $this->name = $name;
        $this->template = $template;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new SendBryteMail($this->name, $this->template);        
        Mail::to($this->send_mail)->queue($email);
    }
}