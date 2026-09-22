<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border-style: solid;
        }
    </style>

</head>

<body>

    <h2>Lista de produtos</h2>
    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>preco</td>
           
        </tr>
        <br><br>




        <?php
        require_once "conexao.php";

        $sql = "SELECT * FROM produto";

        $resultados = mysqli_query($conexao, $sql);

        //fatia os resultados em linhas (1 por 1)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idproduto'];
            $nome = $linha['nome'];
            $preco = $linha['preco'];
           

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$preco</td>";
            echo "</tr>";
        } 
</body>
</html>