<?php
session_start();




echo " {$_SESSION['nomeCliente']} comprou um {$_SESSION['nomeProduto']} que custou {$_SESSION['preco']} reais. Ele levou {$_SESSION['quantidade']} unidades sendo que a preferencia pelo preço de pagamento é o {$_SESSION['preferenciasCliente'] ['preco']} ";