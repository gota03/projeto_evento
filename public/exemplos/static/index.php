<?php
require("funcionario.php");
//$funcionario = new Funcionario();
//$funcionario->relatorio("Mateus", 200);
Funcionario::relatorio("Gota", 2000);
echo "<hr>";
Funcionario::setSalario(100);
echo Funcionario::getSalario();

