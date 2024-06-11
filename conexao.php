<?php 

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha_usuario = "";
$nome_bd = "farmacia";


$conn = new mysqli($nome_servidor, $nome_usuario, $senha_usuario, $nome_bd);

if($conn->connect_error){
    echo "Erro de conexão";
}else{
    echo "Conectado com sucesso!";
}

?>