<?php
// Configuração da conexão
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "meu_banco";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST['nome'];
    $email = $_POST['email'];

    // Usando prepared statement
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

