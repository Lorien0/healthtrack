<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - HealthTrack</title>
  <link rel="stylesheet" href="styles.css">
  <style>
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 28px;
            color: #3498db;
            text-align: center;
            margin: 0 0 20px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .link {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .link:hover {
            background-color: #2980b9;
        }

        #dicas-saude {
            margin-top: 20px;
        }

        h3 {
            font-size: 20px;
            color: #3498db;
            margin-top: 10px;
        }

        p {
            font-size: 16px;
            color: #333;
            margin: 5px 0;
        }
    </style>

</head>
<body>
  <div class="container">
    <h1>Seu Perfil - HealthTrack</h1>
    <a class="link" href="inserir_info.html">Registrar novos valores</a>
    <!-- Formulário de Registro de Atividades Físicas -->
    <h2>Dicas de Saúde</h2>
<div id="dicas-saude">
    <h3>Atividades Físicas:</h3>
    <p>
        - Faça exercícios regularmente para manter-se ativo e saudável. Pode ser caminhada, corrida, natação ou qualquer atividade que você goste.
        - Lembre-se de alongar antes e depois dos exercícios para evitar lesões.
        - Mantenha-se hidratado durante o exercício, bebendo água regularmente.
    </p>

    <h3>Alimentação Saudável:</h3>
    <p>
        - Mantenha uma dieta equilibrada com alimentos ricos em nutrientes, como frutas, vegetais, grãos integrais e proteínas magras.
        - Evite o consumo excessivo de alimentos processados, açúcar e gorduras saturadas.
        - Faça refeições menores e mais frequentes ao longo do dia para manter o nível de energia.
    </p>

    <h3>Bem-Estar Emocional:</h3>
    <p>
        - Pratique a meditação e o relaxamento para reduzir o estresse e melhorar o bem-estar emocional.
        - Mantenha contato com amigos e familiares para construir relacionamentos fortes.
        - Não hesite em buscar ajuda profissional se estiver enfrentando problemas emocionais.
    </p>
</div>
  </div>
</body>
</html>