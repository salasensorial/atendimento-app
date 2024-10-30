<!-- resources/views/cin/busca.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de CINs</title>
    <style>
        .notification {
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .notification p {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Busca de CINs</h1>
    <form action="{{ route('cin.index') }}" method="GET">
        <input type="text" name="query" placeholder="Digite o CPF ou parte do nome" value="{{ $query ?? '' }}" required>
        <button type="submit">Buscar</button>
    </form>

    @if(!empty($query))
        <div class="notification">
            @if($results->isEmpty())
                <p>Nenhum resultado encontrado para "{{ $query }}"</p>
            @else
                <p>Resultados encontrados para "{{ $query }}":</p>
                <ul>
                    @foreach($results as $cin)
                        <li>{{ $cin->nome }} - CPF: {{ $cin->cpf }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif
</body>
</html>
