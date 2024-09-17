<?php
include 'sessions.php';

$sessao = new Sessao();

if (!$sessao->autenticado()) {
    header("Location: login.php");
    exit();
}

$curso = $_GET['curso'];
$arquivo = '';

if ($curso == 'GE') {
    $arquivo = 'ge.txt';
} else if ($curso == 'DSM') {
    $arquivo = 'dsm.txt';
}

if ($arquivo && file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $linhas = explode(PHP_EOL, $conteudo);
} else {
    $linhas = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Solicitações</title>
</head>
<body>
    <h1>Solicitações para <?php echo htmlspecialchars($curso); ?></h1>
    <?php if (!empty($linhas)): ?>
        <ul>
            <?php foreach ($linhas as $linha): ?>
                <?php if (!empty($linha)): ?>
                    <li><?php echo htmlspecialchars($linha); ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhuma solicitação cadastrada.</p>
    <?php endif; ?>
    <a href="dashboard.php">Voltar ao Dashboard</a>
</body>
</html>