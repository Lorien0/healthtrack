<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthtrack";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $query = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conn->query($sql);
    $result2 = mysqli_query($conn, $query);
    $result3 = mysqli_fetch_assoc($result2);
    $resultstring = $result3['id'];
    $_SESSION['id_u'] = $resultstring;    

    if ($result->num_rows == 1) {
        
        #echo ($_SESSION['id_u']);
        header("Location: perfil.php");
        exit();
    } else {
        header("Location: login.html?error=invalid");
        exit();
    }
}

$conn->close();
?>
