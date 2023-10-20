<?php
include_once('conexao.php');
$instrucao="update produto set nome='".$_POST['name']."' , preco='".$_POST['valor']."', quantidade='".$_POST['qtd']."' where id='".$_POST['id']."'";
mysqli_query($conexao,$instrucao);
header("location: ../estoque.php");
?>