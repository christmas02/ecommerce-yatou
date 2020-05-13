<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notification extends Mailable
{
    use Queueable, SerializesModels;
    public $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf="")
    {
        $this->pdf = $pdf;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('commande@laboukka.com', 'admin')
                    ->markdown('mails.notification')
                    ->attachData($this->pdf, 'commande.pdf', [
                    'mime' => 'application/pdf',
        ]);

        

    }
}
