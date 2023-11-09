<?php
session_start();
$userid = $_SESSION['id_u'];

if (isset($_POST['registrar'])) {
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $calorias = $_POST['calorias'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthtrack";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO refeicoes (tipo, descricao, calorias,usuario_id) VALUES ('$tipo', '$descricao', $calorias,'$userid')";

    if ($conn->query($sql) === TRUE) {
        echo "Refeição registrada com sucesso!";
    } else {
        echo "Erro ao registrar refeição: " . $conn->error;
    }

    $conn->close();
}
?>
