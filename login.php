
<?php

$email = $_POST["email"];

$senha = $_POST["senha"];

include "conexao.php";

$sql_buscar_usuario = "select * from usuario where email ='$email' and senha = '$senha' "; //mudar

$um_numero = mysqli_query($conexao, $sql_buscar);

if($um_usuario -> num_rows > 0){
    header("location:painel.php");
    
}else{
    header("location:index.php?msg=erro");
}

mysqli_close($conexao);
?>