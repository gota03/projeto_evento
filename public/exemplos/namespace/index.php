<?php
require("classeLogin/login.php");
require("apiLogin/login.php");

use classeLogin\Login;

use apiLogin\Login as apiLogin; // CRIANDO UM APELIDO PARA O NAMESPACE

$meuLogin = new \classeLogin\Login(); // PRIMEIRA FORMA DE UTILIZAR NAMESPACE CHAMANDO DIRETO NO OBJETO
$meuLogin->verificaLogin();

$meuLogin2 = new Login(); // SEGUNDA FORMA DE USAR NAMESPACE DECLARANDO O USE

$meuLogin3 = new apiLogin(); // TERCEIRA FORMA DE USAR O NAMESPACE CRIANDO UM APELIDO

