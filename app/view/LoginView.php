<?php
include_once("../includes/cabecalho.php");
include_once("../model/LoginDAO.php");
$loginDAO = new LoginDAO();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>

<body>

    <?php
        if(isset($_SESSION["mensagem"])){
            if($_SESSION["mensagem"]){

                if(isset($_SESSION["dados"])){
                    if(isset($_SESSION["admin"]) || isset($_SESSION["user"])){
                        // echo "<div>você é admin</div>";
                        header("Location: ../view/VisualizarEventoView.php");
                        die();
                    }
                      
                    else if(isset($_SESSION["erro"])){
                        echo "
                        <div class='alert alert-danger alert-dismissible fade show mt-3'>
                        <h4 class='text-center'>{$_SESSION['erro']} </h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
                            </div>
                        ";
                    }
                }
            }
            else{
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show mt-3'>
                    <h4 class='text-center'> Preencha os campos de email e senha </h4>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
                        </div>
                    ";
                }
                
        }
        unset($_SESSION["mensagem"]);
        unset($_SESSION["admin"]);
        unset($_SESSION["user"]);

    ?>

    <h1 class="text-center mt-3">Eventos</h1>

    <hr>

    <main class="col-md-6 col-sm-10 border border-dark mx-auto p-3 mt-5 rounded">

        <div class="container-fluid">

            <form action="../controller/LoginController.php" method="post">

                <label for="email" class="fw-semibold">E-mail</label>

                <input type="email" name="email" id="email" class="form-control border-dark mt-2" placeholder="E-mail">

                <label for="senha" class="mt-2 fw-semibold">Senha</label>

                <div class="input-group">
                
                <input type="password" name="senha" id="senha" class="form-control border-dark mt-2" placeholder="Senha">

                <span class="material-symbols-outlined input-group-append btn btn-dark mt-2">
                        visibility_off
                </span>
                
                </div>

                <button type="submit" class="btn btn-secondary mt-3 p-2 col-12 mx-auto">ENTRAR</button>
               
            </form>

        </div>

    </main>

<script src="../js/senha.js"></script>

<?php
include_once("../includes/rodape.php");
?>