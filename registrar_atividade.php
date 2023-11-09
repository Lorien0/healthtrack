<?php
session_start();
$userid = $_SESSION['id_u'];

if (isset($_POST['registrar'])) {
    $tipo = $_POST['tipo'];
    $duracao = $_POST['duracao'];
    $intensidade = $_POST['intensidade'];

    // Aqui você pode realizar os cálculos de calorias com base na atividade, duração e intensidade
    // E depois inserir esses dados no banco de dados

    // Por exemplo, você pode ter uma função que calcule as calorias queimadas
    function calcularCalorias($duracao, $intensidade) {
        // Fatores de calorias por minuto para diferentes intensidades
        $fatoresIntensidade = [
            'baixa' => 3.5,
            'média' => 5.0,
            'alta' => 7.0
        ];
    
        // Calorias = Fator de Intensidade * Duração (minutos)
        if (isset($fatoresIntensidade[$intensidade])) {
            $fator = $fatoresIntensidade[$intensidade];
            $caloriasCalculadas = $fator * $duracao;
            return $caloriasCalculadas;
        } else {
            return 0; // Intensidade desconhecida
        }
    }

    $caloriasQueimadas = calcularCalorias($duracao, $intensidade);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthtrack";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO atividades (usuario_id, tipo, duracao, intensidade, calorias_queimadas) VALUES ('$userid', '$tipo', '$duracao', '$intensidade', '$caloriasQueimadas')";
    if ($conn->query($sql) === TRUE) {
        echo "Atividade registrada com sucesso!";
    } else {
        echo "Erro ao registrar atividade: " . $conn->error;
    }

    $conn->close();
}
?>