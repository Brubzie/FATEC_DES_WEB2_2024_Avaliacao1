<?php
include 'sessions.php';

$sessao = new Sessao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($sessao->login($usuario, $senha)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Área de Login</h1>
    <form action="login.php" method="post">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>