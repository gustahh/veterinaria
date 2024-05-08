<?php
include_once ('../database/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="./src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/veterinaria/src/script.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Veterinária</title>
</head>

<body>
    <?php include_once ('../content/header.php') ?>
    <?php include_once ('../content/barraLateral.php') ?>
    <div class="w-[75%] h-dvh bg-zinc-200 float-right dark:bg-neutral-900">
        <h1 class="text-xl font-bold text-zinc-200 dark:text-zinc-200">
            Cadastrar Animal
        </h1>
        <form action="../queries/cadastraAnimal.php" method="post" enctype="multipart/form-data">
            <label class="text-neutral-900 dark:text-zinc-500">Espécie</label>
            <br>
            <input type="text" name="especie" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Raça</label>
            <br>
            <input type="text" name="raca" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Nome</label>
            <br>
            <input type="text" name="nome" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Porte</label>
            <br>
            <input type="text" name="porte" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Data de Nascimento</label>
            <br>
            <input type="date" name="dtNasc" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Peso</label>
            <br>
            <input type="number" name="peso" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Dono</label>
            <br>
            <select name="dono" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
    <?php 
        $query = "SELECT CODCLI, nome FROM cliente";

        if ($result = $mysqli->query($query)) { 
            while ($linha = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $linha['CODCLI'] ?>">
                <?php echo $linha['nome'] ?>
                </option>
            <?php
            }
        }
        
    ?>
    </select>
            <br>
            <label class="text-neutral-900 dark:text-zinc-500">Foto</label>
            <br>
            <label for="upload" class="w-48 h-10 bg-neutral-900 rounded-md p-3 dark:bg-zinc-200
    flex items-center justify-start cursor-pointer">
                <span class="material-symbols-outlined mr-2 text-zinc-200 text-zinc-300 
        dark:text-neutral-900">
                    upload
                </span>
                <span class="font-bold text-zinc-200 dark:text-neutral-900">
                    Escolher Arquivo
                </span>
            </label>
            <input type="file" name="arquivo" id="upload" class="hidden" accept="image/png, 
            image/jpeg" onchange="displayFileName()">
            <div id="file-name" class="mt-2 text-neutral-900 dark:text-zinc-500"></div>
            <button type="submit" class="w-48 h-10 bg-neutral-900 rounded-md p-3 mt-3 dark:bg-zinc-200
    flex items-center justify-center cursor-pointer font-bold">Cadastrar</button>
        </form>
    </div>
</body>

</html>

<?php $mysqli->close(); ?>