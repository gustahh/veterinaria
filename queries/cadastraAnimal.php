<?php
include_once ('../database/conexao.php');

$especie = $_POST['especie'];
$raca = $_POST['raca'];
$nome = $_POST['nome'];
$porte = $_POST['porte'];
$dtNasc = $_POST['dtNasc'];
$peso = $_POST['peso'];
$codcli = $_POST['dono'];

if (
    !isset($especie) || !isset($raca) || !isset($nome) || !isset($porte)
    || !isset($dtNasc) || !isset($peso)
) {
    echo 'Todos os campos devem ser preenchidos';
} else {
    if (isset($_FILES['arquivo'])) {
        $nome_unico = strtolower(time() . '_' . $_FILES['arquivo']['name']);
        $diretorio = "../img/";
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome_unico);
        $query = "INSERT INTO animal (especie,raca,nome,porte,dtnasc, 
        peso, codcli, foto) VALUES ('$especie', '$raca', '$nome', '$porte',
        '$dtNasc', '$peso', '$codcli', '$nome_unico')";
    } else {
        $query = "INSERT INTO animal (especie,raca,nome,porte,dtnasc, 
        peso, codcli) VALUES ('$especie', '$raca', '$nome', '$porte',
        '$dtNasc', '$peso', '$codcli')";
    };
    if ($result = mysqli_query($mysqli, $query)) {
        echo 'Cadastrado';
        header("Location: /veterinaria/pages/animais.php");
    } else {
        echo 'Erro: ' . mysqli_error($mysqli);
    }
}
?>