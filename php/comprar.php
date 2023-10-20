<?php
include_once('conexao.php');
$vectorText=$_POST['valores'];
$data=date('d/m/Y');
$cont=0;
$quantidade=0;
while ($cont < count($vectorText)) {
    $instrucao="insert into compras(nomeComprador,nomeProduto,quantidade,precoTotal,dataCompra) values('".$_POST['nomecomprador']."',' ".$vectorText[$cont]."' ,'".$vectorText[$cont+1]."','".$vectorText[$cont+2]."','".$data."')";
    mysqli_query($conexao,$instrucao);
    $instrucao="select * from produto where nome='".$vectorText[$cont]."'";
    $comando=mysqli_query($conexao,$instrucao);
    while($row=mysqli_fetch_array($comando)){
        $quantidade=intval($row["quantidade"]);
    }
    $quantidade =intval( $quantidade)  - intval($vectorText[$cont+1]);
        $instrucao="update produto set quantidade='".$quantidade."' where nome='".$vectorText[$cont]."'";
        mysqli_query($conexao,$instrucao);
    $cont=$cont+3;
}
echo"<script src='fatura.js'>";
echo"</script>";
echo"<script>nomeCompra('".$_POST['nomecomprador']."')";
echo"</script>";

for ($i=0; $i < count($vectorText); $i++) { 
    echo"<script>adVector('".$vectorText[$i]."')";
    echo"</script>";
}
echo"<script>factura()";
echo"</script>";





?>
