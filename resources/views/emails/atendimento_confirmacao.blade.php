<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Atendimento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 18px;
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #d9534f;
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
        <h1>Olá, {{ $nome }}</h1>
        <p>Seu atendimento foi realizado com sucesso!</p>
        <p><span class="highlight">Importante:</span> o prazo médio para entrega da sua CIN (Carteira de Identidade Nacional) é de <span class="highlight">30 dias</span>. Você receberá uma notificação por email assim que estiver pronta para retirada. Fique atento!</p>
        <p>Sua CIN estará disponível nas versões digital e física, acessíveis pelo app ou site do gov.br.</p>

        <h2>Instruções para Retirada</h2>
        <p><strong>Local:</strong> Assembleia Legislativa, Anexo III, Sala Sensorial</p>
        <p><strong>Endereço:</strong> Av. Pontes Vieira, 2300 - São João do Tauape, Fortaleza - CE, 60135-238</p>
        <p><strong>Horário:</strong> 08h às 11:30 e 13h às 16h</p>

        <p>Para mais informações, entre em contato pelo telefone (85) 2180-6587.</p>

        <h2>Retirada por Terceiros</h2>
        <p>Um parente de 1º ou 2º grau (pai, mãe, filho, irmãos, tios ou avós) pode retirar sua CIN com um documento original com foto e a certidão de nascimento ou casamento do titular.</p>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Sala Sensorial - ALECE. Todos os direitos reservados.
    </div>
</body>
</html>
