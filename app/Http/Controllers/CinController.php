<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cin;

class CinController extends Controller
{
    // Exibe o formulário de cadastro
    public function create()
    {
        return view('cin.create');
    }

    // Salva os dados no banco
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

    // Exibe o formulário de busca
    

    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtém o parâmetro de busca
        $results = []; // Inicializa os resultados vazios

        if ($query) {
            // Realiza a busca pelo CPF ou parte do nome
            $results = Cin::where('cpf', 'LIKE', "%$query%")
                ->orWhere('nome', 'LIKE', "%$query%")
                ->get();
        }

        // Retorna a view com os resultados e a consulta atual
        return view('cin.busca', compact('results', 'query'));
    }
}