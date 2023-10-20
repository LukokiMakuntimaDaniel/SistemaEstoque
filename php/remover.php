<?php
include_once("conexao.php");
$id=$_POST["id"];
$instrucao="delete from produto where id='".$id."'";
mysqli_query($conexao,$instrucao);
header("location:../estoque.php")
?>