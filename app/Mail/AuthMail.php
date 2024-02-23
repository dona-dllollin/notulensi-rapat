<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AuthMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $pesan;
    public function __construct($pesan)
    {
        $this->pesan = $pesan;
    }

    public function build(){
        return $this->subject('Verifikasi Akun')->view('mail/verify');
    }



    public function attachments(): array
    {
        return [];
    }
}
