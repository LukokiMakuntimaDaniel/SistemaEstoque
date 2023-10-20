<?php
include_once("conexao.php");
$instrucao="select * from produto";
$cont=1;
$comando=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($comando)){
    if($cont<=6 ){
        echo "<fieldset style='height:50%' id='f".$cont."' ><legend>".$row["nome"];
        echo"</legend><table><tr><td>";
        echo"<img src=imagemProduto/".$row["localizaImagem"].">";
        echo"</td></tr><tr><td><p>".$row["preco"];
        echo"<button id='A".$cont."' onclick='aumentar(this)'><div id='adicionar' >+</div></button><button id='D".$cont."' disabled='false' onclick='diminuir(this)' ><div id='adicionar'>-</div></button></p></td></tr>";
        echo"<tr><td id='Q".$cont."'>".$row["quantidade"];
        echo"</td></tr>";
        echo"</table></fieldset>";
    }else{
        echo "<fieldset id='f".$cont."' style='display:none;height:50%'><legend>".$row["nome"];
        echo"</legend><table><tr><td>";
        echo"<img src=imagemProduto/".$row["localizaImagem"].">";
        echo"</td></tr><tr><td><p>".$row["preco"];
        echo"<button id='A".$cont."'  onclick='aumentar(this)'><div id='adicionar'>+</div></button><button id='D".$cont."'  disabled='false' onclick='diminuir(this)'><div id='adicionar'>-</div></button></p></td></tr>";
        echo"<tr><td id='Q".$cont."'>".$row["quantidade"];
        echo"</td></tr>";
        echo"</table></fieldset>";
    }
   $cont=$cont+1;
}

?>