<?php
$id = $_GET;
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];

include "cabecalho.php";

$sql_editar_jogo = "update jogo set titulo ='$titulo', $video = '$video', $foto = '$foto',  $categoria = '$categoria' where id 
= $id"; 

$um_jogo = mysqli_query($conexao, $sql_editar_jogo);

mysqli_close($conexao);


header("location:listar-jogos.php?msg=sucesso");
?>