<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/relatorio.css">
    <title>Relatório de Vendas</title>
</head>

<body>
    <script src="js/produtos.js"></script>

    <?php  include_once("php/trazerTodosProduto.php");  ?>
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
    <section>

        <div class="filtro">
          <label for="">Escolha a Data</label>   <input type="date" onchange="produtosVendidoHoje(this.value)" >
        </div>
        <h1 id="valor">Relatorio de venda De Produtos</h1>
        <div class="tabela">
            <table id="table" border="1">
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        Produtos
                    </th>
                    <th>
                        Quantidade
                    </th>
                    <th>
                    Valor Total
                    </th>
                    <th>
                        Data
                    </th>
                </tr>
            </table>
        </div>
        <script>
            Odata= new Date()
           dia=(Odata.getDate()>9)?Odata.getDate():"0"+Odata.getDate();
           mes=( parseInt(Odata.getMonth())+1 > 9)?(parseInt(Odata.getMonth())+1):"0"+(parseInt(Odata.getMonth())+1)
           data=Odata.getFullYear()+"/"+mes+"/"+dia
           produtosVendidoHoje(data)


        </script>
    </section>
</body>

</html>