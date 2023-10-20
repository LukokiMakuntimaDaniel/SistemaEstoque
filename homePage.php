<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Sistema de compra e venda</title>
    <style>
        #bt{
            margin-top: 310px;
            width: 100px;
            height: 40px;
            border: 1px solid #eee;
        }
        #bt:hover{
            background-color: #ff0099;

        }
    </style>
   <script src="js/jquery/jquery.min.js"></script>
    <script src="js/verMais.js"></script>
</head>

<body onload="setInterval(habilita,1000)">
    <!--...........................header...........................-->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/verMais.js"></script>
    <header>
        <nav>
            <div class="menu">
                <ul>
                    <a href="estoque.php">
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
    <!--...........................section...........................-->
    <section>

        <form id="form" action="php/comprar.php" method="post">
            <table>
             <tr >
                <td >
                    Quantidade
                </td>
                <td id="valorQ">
                    0
                </td>
            </tr>
            <tr>
                <td>
                    Valor total:
                </td>
                <td id="valorD">
                    00 kz
                </td>
            </tr>
           <tr>
           <td><label for="nomeCompradore">Cliente</label></td>
           <td><input name="nomecomprador" type="text" id="escreve"></td>
           </tr>
        </table>
       
        
        
        <div class="comprar">
            <button  style="margin:15px" id="comprar" disabled='true' type="submit">Comprar</button>
        </div>

        </form>
 <script> 
   
 </script> 
    </section>


    <aside>
        <div class="pesquisa">
            <input clss="inp" type="text" name="" placeholder="pesquise o produto">
        </div>
        <div  class="card">
            <?php include_once("php/todosProduto.php");?>
            <div><button id="bt" onclick="vermais()"> ver mais</button></div>
        </div>
      
    </aside>

  

  
        

</body>

</html>