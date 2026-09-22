<?php
//pegar as variáveis
$nome = $_POST['nome'];
$preco = $_POST['preco'];



//montar SQL
$sql = "INSERT INTO produto (nome, preco) VALUES ('$nome', '$preco')";

//executar SQL
require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: cad_produto.php");
?>


