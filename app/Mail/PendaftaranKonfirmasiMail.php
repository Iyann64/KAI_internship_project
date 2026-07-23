<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PendaftaranKonfirmasiMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $nama,
        public string $email,
        public ?string $unit = null,
        public ?string $pengajuanId = null
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Konfirmasi Pendaftaran Magang PT KAI'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.pendaftaran-konfirmasi',
            with: [
                'nama' => $this->nama,
                'email' => $this->email,
                'unit' => $this->unit,
                'pengajuanId' => $this->pengajuanId,
            ],
        );
    }
}
