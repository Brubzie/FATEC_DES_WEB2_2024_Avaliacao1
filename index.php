<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Solicitações</title>
</head>
<body>
    <h1>Cadastro de Solicitações Laboratoriais</h1>
    <form action="cadastro.php" method="post">
        <label for="registro">Registro da Solicitação:</label><br>
        <textarea id="registro" name="registro" required></textarea><br><br>

        <label for="laboratorio">Laboratório:</label><br>
        <select id="laboratorio" name="laboratorio" required>
            <option value="Laboratório 1">Laboratório 1</option>
            <option value="Laboratório 2">Laboratório 2</option>
            <option value="Laboratório 3">Laboratório 3</option>
        </select><br><br>

        <label for="prazo">Prazo:</label><br>
        <input type="date" id="prazo" name="prazo" required><br><br>

        <label for="curso">Curso Atendido:</label><br>
        <select id="curso" name="curso" required>
            <option value="DSM">DSM</option>
            <option value="GE">Gestão Empresarial</option>
        </select><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>