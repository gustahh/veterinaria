<?php
include_once ('../database/conexao.php');

$especie = $_POST['especie'];
$raca = $_POST['raca'];
$nome = $_POST['nome'];
$porte = $_POST['porte'];
$dtNasc = $_POST['dtNasc'];
$peso = $_POST['peso'];
$codcli = $_POST['dono'];

if (isset($_FILES['arquivo'])) {
    $nome_unico = strtolower(time() . '_' . $_FILES['arquivo']['name']);
    $diretorio = "../img/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome_unico);
    $query = "UPDATE animais SET foto = '$nome_unico' where nome = ";

    if ($result = mysqli_query($mysqli, $query)) {
        echo 'Foto editada';
    } else {
        echo 'Erro: ' . mysqli_error($mysqli);
    }
}

?>