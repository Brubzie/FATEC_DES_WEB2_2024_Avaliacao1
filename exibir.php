<?php
include 'sessions.php';

$sessao = new Sessao();

if (!$sessao->autenticado()) {
    header("Location: login.php");
    exit();
}

echo "<h1>Solicitações Cadastradas</h1>";

if (file_exists('dsm.txt')) {
    echo "<h2>Desenvolvimento em Software Multiplataforma (DSM)</h2>";
    echo nl2br(file_get_contents('dsm.txt'));
}

if (file_exists('ge.txt')) {
    echo "<h2>Gestão Empresarial (GE)</h2>";
    echo nl2br(file_get_contents('ge.txt'));
}
?>