<?php
include_once('conexao.php');
$instrucao="select * from compras";
$comando=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($comando)){
    echo"<script>produtos('".$row['id']."','".$row['nomeComprador']."','".$row['nomeProduto']."','".$row['quantidade']."','".$row['precoTotal']."','".$row['dataCompra']."')";
    echo"</script>";
}








?>