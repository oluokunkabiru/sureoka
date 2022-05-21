<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use App\Models\Job;


class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $application;
    public function __construct($application)
    {
        //
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $application = $this->application;
        $job = Job::find($application->job_id);
        return $this->attachFromStorageDisk('public', json_decode($application->cv, true)[0]['download_link'])
        ->markdown('notifications::application', compact(['application', 'job']))->subject($job->title. " Application");
    }
}
