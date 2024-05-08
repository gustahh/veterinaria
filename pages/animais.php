<?php
include_once('../database/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="./src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Veterinária</title>
</head>
<body>
    <?php include_once('../content/header.php') ?>
    <?php include_once('../content/barraLateral.php') ?>
    <div class="w-[75%] h-dvh bg-zinc-200 float-right dark:bg-neutral-900">
        <?php include_once ('../queries/animais.php') ?>
    </div>
</body>
</html>

<?php $mysqli->close(); ?>
