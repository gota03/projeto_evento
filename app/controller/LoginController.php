<?php
session_start();
include_once("../classes/Login.php");
include_once("../model/LoginDAO.php");
$login = new Login();
$loginDAO = new LoginDAO();

if(!isset($_SESSION["mensagem"])){
    $_SESSION["mensagem"] = $login->validaCampos($_POST);
    if($_SESSION["mensagem"]){
        if($_SESSION["dados"] = $loginDAO->consultarUnico($_POST["email"], $_POST["senha"])){
            echo "<pre>";
            print_r($_SESSION["dados"]);
            // echo $_SESSION["dados"][0];
            echo "</pre>";
            $receberUsuario = $_SESSION["dados"][0]["tipo_usuario"];
            $_SESSION["tipoUsuario"] = $_SESSION["dados"][0]["tipo_usuario"];
            if($receberUsuario == 1){
                $_SESSION["admin"] = "Você é admmin";
            } 
            else if($receberUsuario == 2){
                $_SESSION["user"] = "Você é usuário";
            } 
            
            
            //echo $_SESSION["dados"][0];
            

            //header("Location:../view/LoginView.php");
            
        }
        else{
            $_SESSION["erro"] = "Os registros não batem com o banco";
        }
        
        
    }
    
    
}


header("Location:../view/LoginView.php");
die();