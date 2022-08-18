<?php
session_start(); // IREMOS INICIAR UMA SESSÃO NO PHP 
require_once("../classes/Evento.php");

$meuEvento = new Evento();

$_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);

header("Location:../view/CadastroView.php"); // REDIRECIONANDO O USUARIO PARA A PAGINA CADASTROVIEW.PHP
die();
/*
print_r($_POST);
echo "<hr>";
print_r($_FILES);
*/