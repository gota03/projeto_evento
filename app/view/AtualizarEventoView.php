<?php
     include_once("../includes/cabecalho.php");
     require_once("../model/EventoDAO.php");
     if(!isset($_SESSION["id_evento"])){
        $_SESSION["id_evento"] = $_POST["id_evento"];
     }
     $meuEventoDAO = new EventoDAO();
     $resultado = $meuEventoDAO->consultarUnico($_SESSION["id_evento"]);
     $elemento = $resultado[0];

     if(isset($_SESSION["atualizar"])){ // ISSET() VERIFICA SE ALGUMA VARIAVEL EXISTE
        if($_SESSION["atualizar"] ["status"]){
            echo "
            <div class='alert alert-success alert-dismissible fade show mt-3'>
                <h4 class='text-center'> {$_SESSION['atualizar'] ['msg']} </h4>
                <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
            </div>
            ";
        }
        else{
            echo "
            <div class='alert alert-danger alert-dismissible fade show mt-3'>
                <h4 class='text-center'> {$_SESSION['atualizar'] ['msg']} </h4>
                <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
            </div>
            ";
        }
    }
    unset($_SESSION["atualizar"]); //  DESTRUINDO A VARIAVEL DE SESSÃO 
?>

<!-- TELA INICIAL DE LOGIN -->

    <main class="container-fluid">

        <h1 class="text-center mt-4 fs-1 fw-bold">Atualizar Evento</h1>

        <hr>

        <section class="col-md-8 col-sm-11 col-lg-9 mx-auto mt-5 mb-2 rounded border border-dark" id="campo">

            <div class="p-4">
    
                <form action="../controller/EventoController.php" enctype="multipart/form-data" method="POST">
    
                    <section class="row">
    
                        <div class="mt-3">
    
                            <label class="fs-2 mt-4 fw-semibold text-dark" for="nomeEvento">Nome do evento</label>
    
                            <input type="text" name="nomeEvento" id="nomeEvento" placeholder="Informe o nome do evento" class="form-control mt-2 p-2 border-dark" value="<?=$elemento["nome_evento"]?>">
    
                        </div>

                        <div class="mt-3">

                            <label for="dataEvento" class="form-label fs-2 mt-4 fw-semibold text-dark">Data do evento</label>

                            <input type="date" name="dataEvento" id="dataEvento" class="form-control mt-2 border-dark p-2" value="<?=$elemento["data_evento"]?>">

                        </div>

                        <div class="mt-3">

                            <label for="banner" class="form-label fs-2 mt-4 fw-semibold text-dark">

                                Banner do evento 

                            </label>

                                <input type="file" name="banner" id="banner" class="form-control mt-2 border-dark p-2" accept="image/*">

                        </div>

                        <input type="hidden" name="atualizar" value="<?=$elemento['id_evento'] ?>">
    
                        <button class="btn btn-success mt-4 col-6 mx-auto p-2 rounded p-2">
    
                            ATUALIZAR
    
                        </button>
    
                    </section>
    
                </form>
    
            </div>
    
        </section>
    
    </main>

    <?php
        include_once("../includes/rodape.php");
    ?>