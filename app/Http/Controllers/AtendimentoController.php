<?php

namespace App\Http\Controllers;

use App\Mail\CinProntaMail;
use Illuminate\Http\Request;
use App\Models\Atendimento;
use App\Models\Cin; // Importe o modelo Cin
use App\Mail\AtendimentoConfirmacaoMail; // Importe a Mailable
use Illuminate\Support\Facades\Mail; // Importe o facade Mail

class AtendimentoController extends Controller
{
    // Exibe o formulário de cadastro
    public function create()
    {
        return view('cadastrar'); // Retorne a view para o formulário de cadastro
    }

    // Armazena os dados do atendimento no banco de dados
    public function store(Request $request)
    {
        // Valida os campos de entrada
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:atendimentos',
            'email' => 'required|email|max:255',
            'solicitante' => 'required|string|max:255',
        ]);

        // Criação do atendimento
        $atendimento = Atendimento::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->input('email'),
            'dia_atual' => now()->toDateString(),
            'horario' => now()->toTimeString(),
            'solicitante' => $request->solicitante,
        ]);

        // Enviando o e-mail de confirmação
        Mail::to($atendimento->email)->send(new AtendimentoConfirmacaoMail($atendimento->nome));

        // Redireciona de volta para o formulário com mensagem de sucesso
        return redirect('/cadastrar')->with('success', 'Atendimento cadastrado com sucesso!');
    }

    // Armazena os dados da CIN no banco de dados
    // Armazena os dados da CIN no banco de dados
public function storeCin(Request $request)
{
    // Valida os campos de entrada para a CIN
    $request->validate([
        'cpf' => 'required|string|max:14', // Não é mais necessário verificar se existe
        'nome' => 'required|string|max:255', // Nome do titular da CIN
    ]);

    // Criação da CIN
    $cin = Cin::create([
        'cpf' => $request->cpf,
        'nome' => $request->nome,
        'status' => 'pronta', // Define o status como "pronta" por padrão
    ]);

    // Verifica se o CPF está cadastrado no banco de dados de atendimentos
    $atendimento = Atendimento::where('cpf', $request->cpf)->first();

    // Se o atendimento foi encontrado, envia um e-mail
    if ($atendimento) {
        Mail::to($atendimento->email)->send(new CinProntaMail($atendimento->nome));
    }

    // Redireciona de volta para o formulário com uma mensagem de sucesso
    return redirect('/cadastrar-cin')->with('success', 'CIN cadastrada com sucesso!' . ($atendimento ? ' E notificação enviada ao email.' : ''));
}

}
