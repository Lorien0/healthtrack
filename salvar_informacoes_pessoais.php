<?php
if (isset($_POST['salvar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthtrack";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obtém o ID do usuário logado (você precisa implementar a autenticação)
    $usuario_id = $_SESSION['id'];

    $sql = "INSERT INTO informacoes_pessoais (usuario_id, nome, idade, sexo, altura, peso) VALUES ('$usuario_id', '$nome', '$idade', '$sexo', '$altura', '$peso')";

    if ($conn->query($sql) === TRUE) {
        echo "Informações pessoais salvas com sucesso!";
    } else {
        echo "Erro ao salvar informações pessoais: " . $conn->error;
    }

    $conn->close();
}
?>

