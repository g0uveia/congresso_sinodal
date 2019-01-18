<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InfoPagamento extends Mailable
{
    use Queueable, SerializesModels;

    public $inscrito;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inscrito)
    {
        $this->inscrito = $inscrito;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.info');
    }
}
