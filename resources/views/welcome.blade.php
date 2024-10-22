<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto text-center py-16">
        <h1 class="text-4xl font-bold mb-6">Bem-vindo ao Sistema de Agendamento</h1>
        @auth
            <p class="mb-4">Olá, {{ auth()->user()->name }}! Você está logado.</p>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Registrar</a>
        @endauth
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

    </div>
</body>
</html>
