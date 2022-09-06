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
                foreach($loginDAO->consultarUnico($_POST["email"], $_POST["senha"]) as $elemento){
                    if($elemento["tipo_usuario"] == 1){
                        echo "vc é admin";
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
    }
        
        unset($_SESSION["mensagem"]);
    ?>

    <h1 class="text-center mt-3">Eventos</h1>

    <hr>

    <main class="col-md-6 col-sm-10 border border-dark mx-auto p-3 mt-5 rounded">

        <div class="container-fluid">

            <form action="../controller/LoginController.php" method="post">

                <label for="email" class="fw-semibold">E-mail</label>

                <input type="email" name="email" id="email" class="form-control border-dark mt-2" placeholder="E-mail">

                <label for="senha" class="mt-2 fw-semibold">Senha</label>

                <input type="password" name="senha" id="senha" class="form-control border-dark mt-2" placeholder="Senha">
       
                <button type="submit" class="btn btn-secondary mt-3 p-2 col-12 mx-auto">ENTRAR</button>
               
            </form>

        </div>

    </main>


<?php
include_once("../includes/rodape.php");
?>