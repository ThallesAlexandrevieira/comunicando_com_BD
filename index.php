<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <!-- Formulário -->
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <!-- PHP embutido -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $servername = "localhost";
        $username = "usuario";
        $password = "senha";
        $dbname = "meu_banco";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Se a conexão falhar, mostra erro após envio
        if ($conn->connect_error) {
            echo "<p style='color:red;'>Erro de conexão: " . $conn->connect_error . "</p>";
        } else {
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
            } else {
                echo "<p style='color:red;'>Erro ao cadastrar: " . $conn->error . "</p>";
            }

            $conn->close();
        }
    }
    ?>
</body>
</html>
git add <div class=></div>