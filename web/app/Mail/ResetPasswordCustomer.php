<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordCustomer extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $nama;
    protected $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$password)
    {
        $this->nama = $nama;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Reset Password Customer SIMonika")
        ->view('mails.resetpasswordcustomer')
        ->with([
            "nama" => $this->nama,
            "password" => $this->password
        ]);
    }
}
