<?php

$local="br894.hostgator.com.br";
$usuario="mvpstudi_elektro";
$senha="ipi2022";
$nomebanco="mvpstudi_cadastro_elias";
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