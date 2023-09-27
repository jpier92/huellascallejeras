<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailApoyo extends Mailable
{
    use Queueable, SerializesModels;
    protected $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $tipoApoyo = $this->details['apoyoForm'] === 'Hogar' ? $this->details['apoyoForm'].' Temporal' : $this->details['apoyoForm'];
        return new Envelope(
            subject: 'Hey!!! tenemos un nuevo '. $tipoApoyo,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.apoyo',
            with:[
                'apoyoForm'     => $this->details['apoyoForm'],
                'apoyoNombre'   => $this->details['apoyoNombre'],
                'apoyoTelefono' => $this->details['apoyoTelefono'],
                'apoyoEmail'    => $this->details['apoyoEmail'],
                'apoyoAsunto'   => $this->details['apoyoAsunto'],
                'apoyoMensaje'  => $this->details['apoyoMensaje'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
