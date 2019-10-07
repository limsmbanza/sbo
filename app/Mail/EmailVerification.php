<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $emailToken;	
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailToken)
    {
        //

	$this->emailToken =  $emailToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.mail.emailVerification')
		    ->from('verification@e-archive.com')
		    ->subject('Vérification de l email')
		    ->with(['emailToken'=>$this->emailToken]);
    }
}
