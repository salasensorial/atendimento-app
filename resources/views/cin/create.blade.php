<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar CIN</title>
</head>
<body>
    <h1>Cadastrar CIN</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form action="{{ route('cin.store') }}" method="POST">
        @csrf
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <button type="submit">Cadastrar CIN</button>
    </form>
</body>
</html>
