<?php
include_once("conexao.php");
$nomeArquivo="";
if(file_exists("../imagemProduto/")){
    $pasta="../imagemProduto/"; 
    echo "ola tem";
    $nomeArquivo=$_FILES['file']['name'];
    $caminhoActual=$_FILES['file']['tmp_name'];
    move_uploaded_file($caminhoActual,$pasta.$nomeArquivo);
}else{
    $pasta="../imagemProduto/";
    mkdir($pasta);
    $nomeArquivo=$_FILES['file']['name'];
    $guardadoPara = $pasta .$nomeArquivo;
    move_uploaded_file($_FILES['file']['tmp_name'], $guardadoPara);
}
$instrucao="insert into produto(nome,quantidade,preco,localizaImagem) values('".$_POST['name']."','".$_POST['qtd']."','".$_POST['valor']."','".$nomeArquivo."')";
mysqli_query($conexao,$instrucao);
echo"<script>alert('produto cadastrado com sucesso')</script>";
echo"<script>window.location='../cadastro.html'</script>";

?>