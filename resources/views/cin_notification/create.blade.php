<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificação de CIN</title>
    <!-- Adicione seu CSS aqui -->
</head>
<body>
    <h1>Enviar Notificação de CIN</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="{{ route('cin_notifications.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="cpf" placeholder="CPF" required>
    <button type="submit">Enviar Notificação</button>
</form>
</body>
</html>
