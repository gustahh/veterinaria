<?php
include('database/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Funcionarios</title>
</head>
<body>
    <?php include('paginas/funcionarios.php'); ?>
    <hr>
    <?php include('paginas/clientes.php'); ?>
    <hr>
    <?php include('paginas/animais.php'); ?>
</body>
</html>

<?php $mysqli->close(); ?>
