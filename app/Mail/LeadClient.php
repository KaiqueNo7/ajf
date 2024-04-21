<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadClient extends Mailable
{
    use Queueable, SerializesModels;

    public $dadosClient;

    public function __construct($dadosClient)
    {
        $this->dadosClient = $dadosClient;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Lead Client',
        );
    }

    public function content(): Content
    {

        return new Content(
            markdown: 'mail.lead-client',
            with: [
                'dadosClient' => $this->dadosClient,
            ],
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
