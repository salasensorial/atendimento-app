<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Atendimento e CIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .success-message, .error-message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Atendimento</h1>

        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        @if (session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif

        <!-- Formulário de Cadastro de Atendimento -->
        <form action="/cadastrar" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="solicitante" placeholder="Solicitante" required>
            <button type="submit">Cadastrar Atendimento</button>
        </form></br>

        <!-- Formulário de Cadastro de CIN -->
        <h1>Cadastrar CIN</h1>
        <form action="/cadastrar-cin" method="POST">
            @csrf
            <input type="text" name="cpf" placeholder="CPF da CIN" required>
            <input type="text" name="nome" placeholder="Nome" required>
            <button type="submit">Cadastrar CIN</button>
        </form>
    </div>
</body>
</html>
