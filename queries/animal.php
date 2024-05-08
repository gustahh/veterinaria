<?php
$animal = $_GET['animal'];

if ($animal) {
    $query = "SELECT * FROM animal WHERE nome LIKE '$animal%'";
} else {
    $query = "SELECT * FROM animal";
}

if ($result = $mysqli->query($query)) {
    ?>

    <div id="conteudo">
        <h1 class="text-xl font-bold text-neutral-900 dark:text-zinc-200">
            Ficha de animal
        </h1>   
            <?php
            while ($linha = $result->fetch_assoc()) {
                ?>
                    <div class="w-64 h-64 mt-3 rounded-full overflow-hidden float-left">
                        <img src="/veterinaria/img/<?php echo $linha['foto'] ?>" alt="">
                    </div>
                    <span class="text-3xl font-bold text-neutral-900 dark:text-zinc-200 float-left m-3">
                        <?php echo $linha['nome']?>
                    </span>

                <?php
            }
            $result->free();
            ?>
            <a href="../pages/editarAnimal.php?animal=<?php echo $animal ?>"><button>Editar animal</button></a>
    </div>
    <?php
} else {
    echo "Erro na consulta: " . $mysqli->error;
}
?>