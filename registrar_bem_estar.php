<?php
session_start();
$userid = $_SESSION['id_u'];

if (isset($_POST['registrar'])) {
    $humor = $_POST['humor'];
    $estresse = $_POST['estresse'];
    $descricao = $_POST['descricao'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthtrack";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO bem_estar_emocional (usuario_id, humor, estresse, descricao) VALUES ('$userid', '$humor', '$estresse', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro de bem-estar emocional bem-sucedido!";
    } else {
        echo "Erro ao registrar bem-estar emocional: " . $conn->error;
    }

    $conn->close();
}
?>
