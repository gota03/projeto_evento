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

    <?php
        if($meuEventoDAO->consultar()):
            foreach($meuEventoDAO->consultar(true) as $elemento):
    ?>

        <section>
        
            <div class="card mt-5">

                <img src=<?=$elemento["foto_evento"]?> alt="" class="card-img-top">

                <div class="card-body">

                    <h5 class="card-title text-center"><?=ucfirst($elemento["nome_evento"])?></h5>

                    <p class="card-text fw-semibold mt-3 ms-2">O evento ocorrerá na data: <?=$elemento["data_evento"]?></p>

                </div>

                <div class="card-footer">

                    <form action="AtualizarEventoView.php" method="post" class="d-flex justify-content-around">
                    
                        <button type="submit" class="btn btn-info text-light col-5 d-flex justify-content-between align-items-center">
                        EDITAR <span class="material-symbols-outlined">edit</span>
                        </button>

                        <!-- O CAMPO HIDDEN IRA ARMAZENAR DE FORMA OCULTA O ID DE CADA ITEM DO BANCO DE DADOS -->
                        <input type="hidden" name="id_evento" value="<?=$elemento["id_evento"]?>"> 

                        <button type="submit" class="btn btn-danger text-light col-5 d-flex justify-content-between align-items-center">
                        EXCLUIR <span class="material-symbols-outlined ms-2">delete</span>
                        </button>
                    
                    </form>
                
                </div>
            
            </div>

        </section>

        <?php
            endforeach;
            endif;
        ?>
    
    </section>

 </main>

<?php
    include_once("../includes/rodape.php");
?>
