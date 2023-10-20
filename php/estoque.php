<?php
include_once("conexao.php");

$instrucao="select * from produto";
$cont=1;
$comando=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($comando)){
echo"<tr><td>".$row["id"];
echo"</td>";
echo"<td>".$row["nome"];
echo"</td>";
echo"<td>".$row["quantidade"];
echo"</td>";
echo"<td>".$row["preco"];
echo"</td>";
echo"<td>";
echo"<form action='actualizar.php' method='post'>";
echo"<input style='display:none' name='id' value='".$row["id"]."'>";
echo"<button type='submit'>Editar</button>";
echo"</form>";
echo"</td>";
echo"<td>";
echo"<form action='php/remover.php' method='post'>";
echo"<input style='display:none' name='id' value='".$row["id"]."'>";
echo"<button type='submit'>Remover</button>";
echo"</form>";
echo"</td>";
echo"</tr>";
}

?>