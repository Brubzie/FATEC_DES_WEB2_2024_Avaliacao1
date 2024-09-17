<?php
include 'sessions.php';

$sessao = new Sessao();
$sessao->logout();

header("Location: login.php");
exit();
?>