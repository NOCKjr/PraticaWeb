<?php

$local="localhost";
$usuario="root";
$senha="";
$nomebanco="cadastro";
$porta = "3306";

$conexao = mysqli_connect($local, $usuario, $senha, $nomebanco, $porta);

if(!$conexao)
{
    die('não foi possivel conectar no banco de dados!');
}

else{
    echo('banco conectado com sucesso!');
}
?>