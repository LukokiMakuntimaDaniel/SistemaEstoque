<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro de Produto</title>
</head>

<body>
    
    <header>
        <nav>
            <div class="menu">
                <ul> <a href="estoque.php">
                        <li>ESTOQUE</li>
                    </a>
                    <a href="relatorio.php">
                        <li>RELATÓRIO</li>
                    </a>
                    <a href="cadastro.html">
                        <li>CADASTRO</li>
                    </a>
                    <a href="homePage.php">
                        <li>HOME</li>
                    </a>

                </ul>
            </div>
        </nav>
    </header>


    <section>
        <div class="contioudo">
            <h1>Actualize seu produto</h1>
            <?php
                include_once("php/conexao.php");
                $instrucao="select * from produto where id='".$_POST['id']."'";
                $cont=1;
                $comando=mysqli_query($conexao,$instrucao);
                while($row=mysqli_fetch_array($comando)){
                   echo"<form action='php/update.php'  method='POST'><label>Nome: </label> </br>";
                   echo"<input style='display:none' name='id' value='".$row["id"]."'>";
                   echo"<td> <input type='txt' name='name' placeholder='   informe onome do produto' value='".$row['nome']."'></br>
                       <label>Quantidade: </label></br>
                       <input type='number' name='qtd' placeholder=' quantidade do produto' value='".$row["quantidade"]."'></br>
                       <label>Preço:</label></br>
                       <input type='number' name='valor' placeholder='informe ovalor de de um produto' value='".$row["preco"]."'></br>
                       <div class='btn'>
                           <button type='submit' name='botao'>ACTUALIZAR</button>
                           <button type='reset' name='botao'>Cancelar</button>
                       </div>
               </form>";
                }
            ?>

        </div>
    </section>
</body>

</html>