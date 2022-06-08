<?php
$local="locahost";
$usuario="hoot";
$senha="";
$nomebanco="cadastro";
$porta="3301";

$CONEXAO= mysqli_connect($local, $usuario, $senha, $nomebanco, $porta);

if($CONEXAO)
{
    die('não foi possivel conectar no banco de dados!');
}
else{
    echo('registro inserido com sucesso!');
}
$nome= $_POST['nome'];
$numero= $_POST['numero'];
$nascimento= $_POST['nascimento'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$sql="INSERT INTO usuarios VALUES ($nome, $numero, $nascimento,$email, $senha);";

if(!mysqli_query($sql))
{
    die('a instrução sql não foi construida!');
}
else
[
    echo('a instrução sql foi executada!');
]

msqli_close($CONEXAO);
?>