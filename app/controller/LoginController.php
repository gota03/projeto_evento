<?php
session_start();
include_once("../classes/Login.php");
include_once("../model/LoginDAO.php");
$login = new Login();
$loginDAO = new LoginDAO();

if(!isset($_SESSION["mensagem"])){
    $_SESSION["mensagem"] = $login->validaCampos($_POST);
    if($_SESSION["mensagem"]){
        $loginDAO->consultarUnico($_POST["name"], $_POST["senha"]);
    }
}


header("Location:../view/LoginView.php");
die();