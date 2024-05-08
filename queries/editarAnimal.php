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
            Editar
        </h1>
        <?php
        while ($linha = $result->fetch_assoc()) {
            ?>
            <form action="editaAnimal.php?animal=<?php echo $linha['nome'] ?>" class="w-[50%] p-3 border border-zinc-700 border rounded-md float-left">
                <div class="w-64 h-64 mt-3 mr-5 rounded-full overflow-hidden float-left">
                    <img src="/veterinaria/img/<?php echo $linha['foto'] ?>" alt="">
                </div>
                <label class="text-neutral-900 dark:text-zinc-500">Nome</label>
                <br>
                <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
                <br>
                <label class="text-neutral-900 dark:text-zinc-500">Espécie</label>
                <br>
                <input type="text" name="especie" value="<?php echo $linha['especie'] ?>" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
                <br>
                <label class="text-neutral-900 dark:text-zinc-500">Raça</label>
                <br>
                <input type="text" name="raca" value="<?php echo $linha['raca'] ?>" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
                <br>
                <label class="text-neutral-900 dark:text-zinc-500">Porte</label>
                <br>
                <input type="text" name="porte" value="<?php echo $linha['porte'] ?>" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
                <br>
                <label class="text-neutral-900 dark:text-zinc-500">Peso</label>
                <br>
                <input type="number" name="peso" value="<?php echo $linha['peso'] ?>" class="w-64 h-8 bg-zinc-200 rounded-md mr-3 p-3 
    border border-zinc-700 text-zinc-500 placeholder:text-zinc-500 
    dark:bg-neutral-900">
                <br>
                <label class="text-neutral-900 dark:text-zinc-500 ml-2">Foto</label>
                <br>
                <label for="upload" class="w-48 h-10 bg-neutral-900 rounded-md p-3 dark:bg-zinc-200
    flex items-center justify-start cursor-pointer float-left ml-2">
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
                <button type="submit" class="w-48 h-10 bg-neutral-900 rounded-md p-3 mt-3 dark:bg-zinc-200
    flex items-center justify-center cursor-pointer font-bold float-right mr-3">Salvar</button>
            </form>
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