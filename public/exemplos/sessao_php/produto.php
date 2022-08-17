<?php
session_start();
$nomeProduto = "nike";
$preco = 200;
$quantidade = 1;



echo "{$_SESSION['nomeCliente']} decidiu comprar o produto {$nomeProduto} e custou R$ {$preco} e vai levar {$quantidade} unidade pagando com o {$_SESSION['preferenciasCliente'] ['pagamento']}";

// CRIANDO VARIAVEIS DE SESSÃO

$_SESSION["nomeProduto"] = $nomeProduto;
$_SESSION["preco"] = $preco;
$_SESSION["quantidade"] = $quantidade;