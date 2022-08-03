<?php
include("heranca1.php");
$veiculo = new Veiculo("fiat", "argo");
$veiculo->ligar();
echo "<hr>"; 
$veiculo->desligar();
echo "<hr>";
$veiculo->estaLigado();
echo "<hr>";
$carro = new Carro("chevrolet", "onix");
$carro->ligar();
echo "<hr>";
$carro->ligarParaBrisa();
echo "<hr>";
$moto = new Moto("honda", "pop100");
$moto->ativarAntena();
