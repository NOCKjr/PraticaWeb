<?php
$local="locahost";
$usuario="root";
$senha="";
$nomebanco="cadastro";

$CONEXAO = mysqli_connect($local, $usuario, $senha, $nomebanco);

if(!$CONEXAO)
{
    die('não foi possivel conectar no banco de dados!');
}
else{
    echo('registro inserido com sucesso!');
}


?>