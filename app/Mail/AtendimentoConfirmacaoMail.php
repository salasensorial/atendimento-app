<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AtendimentoConfirmacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;

    // Construtor
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    // Monta o e-mail
    public function build()
    {
        return $this->from('sala.sensorial.alece@gmail.com', 'Sala Sensorial') // Define o remetente
                    ->subject("Sala Sensorial / Alece") // Define o assunto desejado
                    ->view('emails.atendimento_confirmacao'); // Certifique-se de que a view está correta
    }
}
