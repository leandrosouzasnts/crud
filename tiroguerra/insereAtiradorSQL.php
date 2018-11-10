<?php
include "conexao.php";


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];

$sql = "INSERT INTO atirador (nome, cpf, data_nasc) VALUES 
('$nome', '$cpf', '$data_nasc');";


$resultado = mysqli_query($conexao, $sql);

    if(!$resultado){
        echo "Erro ao inserir atiraddor no banco de dados!";
    }

//Depos da chamada do insereAtiradorSQL.php o mesmo é direcionado para listagem, ficando assim mais intuitivel ao usuário.
header('location: atiradores.php');

/*echo $nome;
echo $cpf;
echo $nascimento;
echo $endereco;
echo $pontuacao;
*/