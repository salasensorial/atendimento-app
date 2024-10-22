<!-- resources/views/consulta.blade.php -->
<form action="{{ route('consulta') }}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <button type="submit">Enviar</button>
</form>

<!-- Exibir Nome e CPF se encontrados -->
@if(isset($nome) && isset($cpf))
    <h3>Dados encontrados:</h3>
    <p>Nome: {{ $nome }}</p>
    <p>CPF: {{ $cpf }}</p>
@endif
