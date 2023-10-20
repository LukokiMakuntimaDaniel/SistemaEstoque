<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estoque.css">
    <title>Produtos Em Estoque</title>
</head>

<body>
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
        <h1>Lista de Produtos</h1>
        <div class="tabela">
            <table border="1">
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
                        Preço
                    </th>
                    <th>
                        Editar
                    </th>
                    <th>
                       Remover
                    </th>
                </tr>
                <?php
                    include_once("php/estoque.php")
                ?>
              
            </table>

        </div>
</body>

</html>