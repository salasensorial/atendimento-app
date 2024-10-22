@extends('layouts.app')

@section('title', 'Cadastrar Atendimento')

@section('content')
<h1>Cadastrar Atendimento</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('atendimentos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required>
    </div>
    <div class="form-group">
        <label for="solicitante">Solicitante</label>
        <input type="text" class="form-control" id="solicitante" name="solicitante" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection
