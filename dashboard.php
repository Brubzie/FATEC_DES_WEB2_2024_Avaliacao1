<?php
include 'sessions.php';

$sessao = new Sessao();

if (!$sessao->autenticado()) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <a href="logout.php">Logout</a>
    <br><br>
    <form action="visualizar.php" method="get">
        <button type="submit" name="curso" value="GE">Visualizar solicitações GE</button>
        <button type="submit" name="curso" value="DSM">Visualizar solicitações DSM</button>
    </form>
</body>
</html>