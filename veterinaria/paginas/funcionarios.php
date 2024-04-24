<?php 

if ($parametro) {
    $query = "SELECT * FROM funcionario WHERE nome LIKE '$parametro%'";
} else {
    $query = "SELECT * FROM funcionario";
}

if ($result = $mysqli->query($query)) {
?>

<div id="conteudo">
        <h1>FUNCIONÁRIOS</h1>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Cargo</td>
                <td>Email</td>
            </tr>
            <?php
                while ($linha = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $linha['codfunc'] ?></td>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['cargo'] ?></td>
                <td><?php echo $linha['email'] ?></td>
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