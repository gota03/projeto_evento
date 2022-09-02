<?php
include_once("../includes/cabecalho.php");
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
                //echo "dados sucesso";
                /*echo "
            <div class='alert alert-success alert-dismissible fade show mt-3'>
                <h4 class='text-center'>  </h4>
                <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
            </div>
            ";*/
            }
            else{
                //echo "Preencha os campos de email e senha";
                echo "
            <div class='alert alert-danger alert-dismissible fade show mt-3'>
                <h4 class='text-center'> Preencha os campos de email e senha </h4>
                <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
            </div>
            ";
            }
        }
        unset($_SESSION["mensagem"]);
    ?>
    <h1 class="text-center mt-3">Eventos</h1>

    <hr>

    <main class="col-md-6 col-sm-11 border border-dark mx-auto p-3 mt-5 rounded">

        <div class="container-fluid">

            <form action="../controller/LoginController.php" method="post">

                <label for="email">E-mail</label>

                <input type="email" name="email" id="email" class="form-control mt-2" placeholder="E-mail">

                <label for="senha" class="mt-2">Senha</label>

                <input type="password" name="senha" id="senha" class="form-control mt-2" placeholder="Senha">

                <button type="submit" class="btn btn-secondary col-12 mx-auto mt-3">Entrar</button>
            
            </form>


        </div>
    
    

    </main>
<?php
include_once("../includes/rodape.php");
?>

