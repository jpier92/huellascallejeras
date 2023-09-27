<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailAgrupacion extends Mailable
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
        return new Envelope(
            subject: 'Hey!!! Han Adoptado a '.$this->details['adoptaNombreAnimal'].'!!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.adoptaAgrupacion',
            with: [
                'nombreAdopta' => $this->details['adoptaNombres'],
                'apellidosAdopta' => $this->details['adoptaApellidos'],
                'direccionAdopta' => $this->details['adoptaDireccion'],
                'comunaAdopta' => $this->details['adoptaComuna'],
                'telefonoAdopta' => $this->details['adoptaTelefono'],
                'nombreAnimal' => $this->details['adoptaNombreAnimal'],
                'urlImagen' => $this->details['adoptaImagen']
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
