<?php
session_start();
$nome = "Mateus";
$idade = 19;
$preferencias = [
    "tipo" => "Calçados",
    "preco" => "Mais baratos",
    "pagamento" => "cartão de crédito"
];

// CRIANDO VARIAVEIS DE SESSÃO
$_SESSION["nomeCliente"] = $nome;
$_SESSION["idadeCliente"] = $idade;
$_SESSION["preferenciasCliente"] = $preferencias;

echo "{$nome} tem {$idade} anos e gosta de pagar os tenis casuais {$_SESSION['nomeProduto']} com a forma de pagamento {$preferencias['pagamento']}";