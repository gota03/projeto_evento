<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CadastroView.css">

</head>

<body>

  <header class="sticky-top">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a href="#" class="navbar-brand">Gerenciador de eventos</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a href="" class="nav-link mt-1">Eventos</a>

                    </li>

                    <li class="nav-item">

                        <a href="" class="nav-link mt-1">Logout</a>

                    </li>

                </ul>

            </div>

        </div>

      </nav>

  </header>

<!-- TELA INICIAL DE LOGIN -->

    <main class="container-fluid">

        <?php
            if(isset($_SESSION["mensagem"])){ // ISSET() VERIFICA SE ALGUMA VARIAVEL EXISTE
                if($_SESSION["mensagem"] ["status"]){
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
                    </div>
                    ";
                }
                else{
                    
                }
            }
        ?>

        <section class="col-md-6 col-sm-11 mx-auto mt-5 rounded" id="campo">

            <div class="p-4">
    
                <form action="../controller/EventoController.php" enctype="multipart/form-data" method="POST">
    
                    <section class="row">
    
                        <div class="mt-3">
    
                            <label class="fs-2 mt-4 fw-semibold text-light" for="email">Nome do evento</label>
    
                            <input type="text" name="nomeEvento" id="nomeEvento" placeholder="Informe o nome do evento" class="form-control mt-2 p-2 border-dark">
    
                        </div>

                        <div class="mt-3">

                            <label for="dataEvento" class="form-label fs-2 mt-4 fw-semibold text-light">Data do evento</label>

                            <input type="date" name="dataEvento" id="dataEvento" class="form-control mt-2 border-dark p-2">

                        </div>

                        <div class="mt-3">

                            <label for="banner" class="form-label fs-2 mt-4 fw-semibold text-light">

                                Banner do evento 

                            </label>

                                <input type="file" name="banner" id="banner" class="form-control mt-2 border-dark p-2" accept="image/*">

                        </div>
    
                        <button class="btn btn-success mt-4 col-6 mx-auto p-2 rounded p-2">
    
                            CADASTRAR
    
                        </button>
    
                    </section>
    
                </form>
    
            </div>
    
        </section>
    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>