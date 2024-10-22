<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cin; // O modelo 'Cin' já está criado no projeto

class CinController extends Controller
{
    // Método para exibir o formulário de cadastro
    public function create()
    {
        return view('cin.create'); // A ser criado na pasta 'resources/views/cin'
    }

    // Método para salvar os dados no banco
    public function store(Request $request)
{
    // Validação dos dados
    $validatedData = $request->validate([
        'cpf' => 'required|cpf|unique:cins,cpf',
        'nome' => 'required|string|max:255',
    ]);

    // Criação de uma nova CIN
    Cin::create([
        'cpf' => $request->cpf,
        'nome' => $request->nome,
        'status' => 'pronta', // Status padrão
    ]);

    // Retorna uma mensagem de sucesso
    return redirect()->route('cin.create')->with('success', 'CIN cadastrada com sucesso!');
}

}
