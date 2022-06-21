<?php
    
include('conexao.php');
    
$nome= $_POST['nome'];
$nascimento= $_POST['nascimento'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$sql="INSERT INTO usuarios VALUES ('$nome', '$nascimento','$email', '$senha')";

if(!mysqli_query($conexao, $sql))
{
    die('a instrução sql não foi executada!');
}
else
{
    echo('a instrução sql foi executada!');
}

msqli_close($conexao);
?>