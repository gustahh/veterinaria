<?php 

if ($parametro) {
    $query = "SELECT * FROM animal WHERE nome LIKE '$parametro%'";
} else {
    $query = "SELECT * FROM animal";
}

if ($result = $mysqli->query($query)) {
?>

<div id="conteudo">
        <h1>ANIMAIS</h1>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Espécie</td>
                <td>Raça</td>
                <td>Peso</td>
                <td>Dono</td>
            </tr>
            <?php
                while ($linha = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $linha['codanim'] ?></td>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['especie'] ?></td>
                <td><?php echo $linha['raca'] ?></td>
                <td><?php echo $linha['peso'] ?></td>
                <?php 
                    $cod_dono = $linha['codcli']; 
            
                    $queryNome = "SELECT nome FROM cliente WHERE CODCLI = '$cod_dono'";
                    
                    if ($result = $mysqli->query($queryNome)) {
                        while ($pesquisa = $result->fetch_assoc()) {
                            $nomeCliente = $pesquisa['nome'];
                            ?>  
                             <td><?php echo $nomeCliente ?></td>
                            <?php
                        }                    
                    }
                ?>
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