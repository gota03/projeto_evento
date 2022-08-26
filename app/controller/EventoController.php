<?php
session_start(); // IREMOS INICIAR UMA SESSÃO NO PHP 
require_once("../classes/Evento.php");
require_once("../model/EventoDAO.php");


$meuEvento = new Evento();
$meuEventoDAO = new EventoDAO();

$_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);

if($_SESSION["mensagem"] ["status"]){
    $meuEventoDAO->inserir($meuEvento);
}

header("Location:../view/CadastroView.php"); // REDIRECIONANDO O USUARIO PARA A PAGINA CADASTROVIEW.PHP
die();
