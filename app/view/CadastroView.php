<?php
     include_once("../includes/cabecalho.php");
?>

<!-- TELA INICIAL DE LOGIN -->

    <main class="container-fluid">

        <?php
            if(isset($_SESSION["mensagem"])){ // ISSET() VERIFICA SE ALGUMA VARIAVEL EXISTE
                if($_SESSION["mensagem"] ["status"]){
                    echo "
                    <div class='alert alert-success alert-dismissible fade show mt-3'>
                        <h4 class='text-center'> {$_SESSION['mensagem'] ['msg']} </h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
                    </div>
                    ";
                }
                else{
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show mt-3'>
                        <h4 class='text-center'> {$_SESSION['mensagem'] ['msg']} </h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'> </button>
                    </div>
                    ";
                }
            }
            unset($_SESSION["mensagem"]); //  DESTRUINDO A VARIAVEL DE SESSÃO 
        ?>

        <h1 class="text-center mt-4 fs-1 fw-bold">Cadastre um novo evento</h1>

        <hr>

        <section class="col-md-8 col-sm-11 col-lg-9 mx-auto mt-5 mb-2 rounded border border-dark" id="campo">

            <div class="p-4">
    
                <form action="../controller/EventoController.php" enctype="multipart/form-data" method="POST">
    
                    <section class="row">
    
                        <div class="mt-3">
    
                            <label class="fs-2 mt-4 fw-semibold text-dark" for="nomeEvento">Nome do evento</label>
    
                            <input type="text" name="nomeEvento" id="nomeEvento" placeholder="Informe o nome do evento" class="form-control mt-2 p-2 border-dark">
    
                        </div>

                        <div class="mt-3">

                            <label for="dataEvento" class="form-label fs-2 mt-4 fw-semibold text-dark">Data do evento</label>

                            <input type="date" name="dataEvento" id="dataEvento" class="form-control mt-2 border-dark p-2">

                        </div>

                        <div class="mt-3">

                            <label for="banner" class="form-label fs-2 mt-4 fw-semibold text-dark">

                                Banner do evento 

                            </label>

                                <input type="file" name="banner" id="banner" class="form-control mt-2 border-dark p-2" accept="image/*">

                        </div>

                        <input type="hidden" name="cadastrar">
    
                        <button class="btn btn-success mt-4 col-6 mx-auto p-2 rounded p-2">
    
                            CADASTRAR
    
                        </button>
    
                    </section>
    
                </form>
    
            </div>
    
        </section>
    
    </main>

    <?php
        include_once("../includes/rodape.php");
    ?>