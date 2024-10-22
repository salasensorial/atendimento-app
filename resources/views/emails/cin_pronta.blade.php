<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira de Identidade Nacional</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            text-align: center;
        }
        .address {
            background-color: #e8f5e9;
            border-left: 4px solid #4CAF50;
            padding: 10px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Olá, {{ $nome }}!</h1>
        <p>Informamos que sua CIN (Carteira de Identidade Nacional) está pronta para retirada.</p>
        <div class="address">
            <strong>Endereço de Retirada:</strong><br>
            Assembleia Legislativa Anexo III,<br>
            Sala Sensorial,<br>
            Av. Pontes Vieira, 2300 - São João do Tauape,<br>
            Fortaleza - CE, 60135-238.<br>
            <strong>Horário:</strong> De 08h às 11:30 e 13h às 16h.
        </div>
        <p>Por favor, traga um documento original com foto para a retirada.</p>
        <p>Atenciosamente,</p>
        <p>Equipe de Atendimento</p>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Sala Sensorial - ALECE. Todos os direitos reservados.
    </div>
</body>
</html>
