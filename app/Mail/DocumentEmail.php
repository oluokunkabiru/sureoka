<?php

namespace App\Mail;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DocumentEmail extends Mailable
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
        return $this->attachFromStorageDisk('public', json_decode($application->back, true)[0]['download_link'])
        ->attachFromStorageDisk('public', json_decode($application->front, true)[0]['download_link'])
        ->markdown('notifications::post-application', compact(['application', 'job']))->subject($job->title. " Application Document");
    }
}
