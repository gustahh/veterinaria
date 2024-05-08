<?php

if ($parametro) {
    $query = "SELECT * FROM animal WHERE nome LIKE '$parametro%'";
} else {
    $query = "SELECT animal.*, cliente.nome AS 'dono' FROM animal CROSS JOIN cliente ON animal.codcli = cliente.codcli;";
}

if ($result = $mysqli->query($query)) {
    ?>

    <div id="conteudo">
        <h1 class="text-xl font-bold text-neutral-900 dark:text-zinc-200">Animais</h1>
        <table border="1">
            <tr class="border-b-2 border-zinc-700">
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="mr-2">
                        ID
                    </span>
                </td>
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="ml-2">
                        Nome
                    </span>
                </td>
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="ml-2">
                        Espécie
                    </span>
                </td>
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="ml-2">
                        Raça
                    </span>
                </td>
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="ml-2">
                        Peso
                    </span>
                </td>
                <td class="font-bold dark:text-neutral-900 dark:text-zinc-200">
                    <span class="ml-2">
                        Dono
                    </span>
                </td>
            </tr>
            <?php
            while ($linha = $result->fetch_assoc()) {
                ?>
                <tr class="border-b-2 border-zinc-700">
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span>
                            <?php echo $linha['codanim'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <a href="animal.php?animal=<?php echo $linha['nome'] ?>"><?php echo $linha['nome'] ?></a>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['especie'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['raca'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['peso'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['dono'] ?>
                        </span>
                    </td>
                </tr>
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