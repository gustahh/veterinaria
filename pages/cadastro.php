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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Veterinária</title>
</head>

<body>
    <?php include_once ('../content/header.php') ?>
    <?php include_once ('../content/barraLateral.php') ?>
    <div class="w-[75%] h-dvh bg-zinc-200 float-right dark:bg-neutral-900">
        <h1 class="text-xl font-bold text-zinc-200 dark:text-zinc-200">
            Cadastrar
        </h1>
        <div class="flex flex-row">
            <a href="/veterinaria/pages/cadastrarCliente.php">
                <button class="w-auto h-10 bg-zinc-200 rounded-md p-2 dark:bg-neutral-900
    flex items-start justify-start">

                    <span class="material-symbols-outlined mr-2 text-neutral-900 text-zinc-300 
        dark:text-zinc-200">
                        person
                    </span>

                    <span class="font-bold text-zinc-200 dark:text-zinc-200">
                        Cliente
                    </span>
                </button>
            </a>
            <a href="/veterinaria/pages/cadastrarFuncionario.php">
                <button class="w-auto h-10 bg-zinc-200 rounded-md p-2 dark:bg-neutral-900
    flex items-start justify-start">

                    <span class="material-symbols-outlined mr-2 text-neutral-900 text-zinc-300 
        dark:text-zinc-200">
                        badge
                    </span>

                    <span class="font-bold text-zinc-200 dark:text-zinc-200">
                        Funcionário
                    </span>

                </button>
            </a>
            <a href="/veterinaria/pages/cadastrarAnimal.php">
                <button class="w-auto h-10 bg-zinc-200 rounded-md p-2 dark:bg-neutral-900
    flex items-start justify-start">
                    <span class="material-symbols-outlined mr-2 text-neutral-900 text-zinc-300 
        dark:text-zinc-200">
                        pets
                    </span>
                    <span class="font-bold text-zinc-200 dark:text-zinc-200">
                        Animal
                    </span>
                </button>
            </a>
        </div>

    </div>
</body>

</html>

<?php $mysqli->close(); ?>