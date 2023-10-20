<?php
include_once("conexao.php");
$contacto=$_POST["contacto"];
$senha=$_POST["senha"];
$instrucao="select numero,senha from usuario";
$comando=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($comando)){
    if(strcmp($contacto,$row["numero"])==0 && strcmp($senha,$row["senha"])==0){
        header("location:../homePage.php");
    }
}
echo"<script>alert('dados incorretos')</script>";
echo"<script>window.location='../index.html'</script>";








?>