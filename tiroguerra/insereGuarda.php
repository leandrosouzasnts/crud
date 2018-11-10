<?php
include "conexao.php";

$nome = $_POST['nome'];
$data = $_POST['data'];

$sql = "INSERT INTO guarda (nome, data_guarda) VALUES ('$nome', '$data');";

$rs = mysqli_query($conexao,$sql);

if(!$rs){
    echo "Não foi possível vincular a guarda";
}

header('location: lstGuarda.php');