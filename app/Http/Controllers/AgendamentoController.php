<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento; // Modelo para o cadastro

class AgendamentoController extends Controller
{
    // Exibe o formulário de cadastro
    public function create()
    {
        return view('cadastro'); // Retorne a view para o formulário de cadastro
    }

    // Armazena os dados do requerente no banco de dados
    public function store(Request $request)
    {
        // Valida os campos de entrada
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:atendimentos',
            'email' => 'required|email|max:255',
        ]);

        // Criação do requerente
        Atendimento::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'dia_atual' => now()->toDateString(),
            'horario' => now()->toTimeString(),
            'solicitante' => $request->nome, // Ou o que você preferir
        ]);

        // Redireciona para a tela de agendamentos com mensagem de sucesso
        return redirect()->route('agendamentos')->with('success', 'Cadastro realizado com sucesso! Agora você pode agendar seu atendimento.');
    }

    // Exibe a tela de agendamentos
    public function index()
    {
        return view('agendamentos'); // Retorne a view para agendamentos
    }
}

