<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Atendimento</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Olá {{ $nome }},</h1>
        <p>Seu atendimento foi feito com sucesso e o prazo para retirada é de 30 dias.</p>
        <p>Sua CIN ficará disponível na versão digital e física e o acesso deve ser feito pelo app ou site do gov.br.</p>
        <p>A retirada do documento deve ser feita no prédio da Assembleia Legislativa Anexo III na Sala Sensorial, que fica na Av. Pontes Vieira, 2300 - São João do Tauape, Fortaleza - CE, 60135-238 de 08h às 11:30 e 13h às 16h.</p>
        <p>Qualquer dúvida, entre em contato pelo telefone (85) 2180-6587.</p>
        <p>A retirada da sua CIN por terceiros pode ser realizada por parentes de 1º ou 2º grau (PAI, MÃE, FILHO, IRMÃOS, TIOS OU AVÓS) apresentando documento original com foto juntamente com a certidão de nascimento ou casamento do titular.</p>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Sala Sensorial - ALECE. Todos os direitos reservados.
    </div>
</body>
</html>
