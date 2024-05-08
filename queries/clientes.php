<?php

if ($parametro) {
    $query = "SELECT * FROM cliente WHERE nome LIKE '$parametro%'";
} else {
    $query = "SELECT * FROM cliente";
}

if ($result = $mysqli->query($query)) {
    ?>

    <div id="conteudo">
        <h1 class="text-xl font-bold text-neutral-900 dark:text-zinc-200">Clientes</h1>
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
                        Email
                    </span>
                </td>
            </tr>
            <?php
            while ($linha = $result->fetch_assoc()) {
                ?>
                <tr class="border-b-2 border-zinc-700">
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span>
                            <?php echo $linha['CODCLI'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['nome'] ?>
                        </span>
                    </td>
                    <td class="text-neutral-900 dark:text-zinc-500">
                        <span class="mx-2">
                            <?php echo $linha['email'] ?>
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