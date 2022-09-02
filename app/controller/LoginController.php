<?php
session_start();
include_once("../classes/Login.php");
$login = new Login();

if(!isset($_SESSION["mensagem"])){
    $_SESSION["mensagem"]  = $login->validaCampos($_POST);
}
header("Location:../view/LoginView.php");
die();