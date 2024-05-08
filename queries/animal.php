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
        <h1 class="text-xl font-bold text-zinc-200 dark:text-zinc-200">
            <?php echo $animal ?>
        </h1>
            <?php
            while ($linha = $result->fetch_assoc()) {
                ?>
                    <div class="w-64 h-64 rounded-full overflow-hidden">
                        <img src="/veterinaria/img/<?php echo $linha['foto'] ?>" alt="">
                    </div>
                <?php
            }
            $result->free();
            ?>
        </table>
    </div>
    <?php
} else {
    echo "Erro na consulta: " . $mysqli->error;
}
?>