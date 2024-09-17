<?php
include 'sessions.php';

$sessao = new Sessao();

if (!$sessao->autenticado()) {
    header("Location: login.php");
    exit();
}

if ($_SESSION["username"] == 'tecnicos') {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registro = $_POST['registro'];
    $laboratorio = $_POST['laboratorio'];
    $prazo = $_POST['prazo'];
    $curso = $_POST['curso'];

    $linha = $laboratorio . " | " . $prazo . " | " . $registro . PHP_EOL;

    if ($curso == 'DSM') {
        file_put_contents('dsm.txt', $linha, FILE_APPEND);
    } else if ($curso == 'GE') {
        file_put_contents('ge.txt', $linha, FILE_APPEND);
    }

    echo "Nova solicitação cadastrada com sucesso!";
}
?>