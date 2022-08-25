<?php
    include_once("../includes/cabecalho.php");
    require_once("../model/EventoDAO.php");

    $meuEventoDAO = new EventoDAO();
?>

 <main class="container-fluid mt-5">

    <section class="d-flex justify-content-between border border-dark rounded-pill p-2">

        <h3 class="fw-bold ms-3 my-auto">Gerenciamento de Eventos</h3>

        <a href="CadastroView.php" class="btn btn-primary me-4">Criar Evento</a>

    </section>

    <section class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">

        <section>
        
            <div class="card mt-5">

                <img src="" alt="" class="card-img-top">

                <div class="card-body">

                    <h5 class="card-title text-center">Titulo do evento</h5>

                    <p class="card-text fw-semibold mt-3 ms-2">O evento ocorrerá na data</p>

                </div>

                <div class="card-footer">

                    <form action="" method="post" class="d-flex justify-content-around">
                    
                        <button type="submit" class="btn btn-info text-light col-5 d-flex justify-content-between align-items-center">
                        EDITAR <span class="material-symbols-outlined">edit</span>
                        </button>

                        <button type="submit" class="btn btn-danger text-light col-5 d-flex justify-content-between align-items-center">
                        EXCLUIR <span class="material-symbols-outlined ms-2">delete</span>
                        </button>
                    
                    </form>
                
                </div>
            
            </div>

        </section>
    
    </section>

 </main>

<?php
    include_once("../includes/rodape.php");
?>
