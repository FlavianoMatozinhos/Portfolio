<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $telefone;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $telefone, $email)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->view('emails.index'); // Crie uma view para o email, ex: resources/views/emails/contato-form.blade.php
    }
}
