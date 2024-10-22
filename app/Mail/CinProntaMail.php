<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CinProntaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function build()
    {
        return $this->from('sala.sensorial.alece@gmail.com', 'Sala Sensorial') // Define o remetente->subject('CIN Pronta para Retirada')
                    ->view('emails.cin_pronta') // Crie uma view para o corpo do email
                    ->with(['nome' => $this->nome]);
    }
}
