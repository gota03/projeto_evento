<?php
session_start(); // IREMOS INICIAR UMA SESSÃO NO PHP 
require_once("../classes/Evento.php");
require_once("../model/EventoDAO.php");


$meuEvento = new Evento();
$meuEventoDAO = new EventoDAO();


if(isset($_POST["cadastrar"])){
    $_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);

if($_SESSION["mensagem"] ["status"]){
    $meuEventoDAO->inserir($meuEvento);
}

header("Location:../view/CadastroView.php"); // REDIRECIONANDO O USUARIO PARA A PAGINA CADASTROVIEW.PHP
die();
}
if(isset($_POST["atualizar"])){
    $_SESSION["atualizar"] = $meuEvento->inicio($_POST, $_FILES["banner"]);
    if($_SESSION["atualizar"]["status"]){
        $meuEventoDAO->atualizar($meuEvento, $_POST["atualizar"]); // ESTAMOS PASSANDO COMO PARAMETRO UM OBJETO EVENTO E O ID DO EVENTO QUE ESTA ATRIBUIDO AO $_POST["ATUALIZAR"]
    }
    header("Location:../View/AtualizarEventoView.php");
    die();
}