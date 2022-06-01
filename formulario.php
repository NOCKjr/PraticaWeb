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

if(isset($_POST["enviar"])){
    $nome = isset($_POST["nome"]) ? (string) $_POST["nome"] : NULL;
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : NULL;
    $aniversario = isset($_POST["aniversario"]) ? (string) $_POST["aniversario"] : NULL;
    $utensilios = isset($_POST["check"]) ? $_POST["check"] : NULL;
    if(!empty($utensilios) && !empty($nome)){ 
        foreach($utensilios as $val){ 
            $msg .= $val . "<br/>";
        }   
    }   
}

$sql="INSERT INTO usuarios VALUES ($nome, $numero, $aniversario, $utensilios);";

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