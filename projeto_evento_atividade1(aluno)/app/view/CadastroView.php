<?php
include_once("../controller/EventoController.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Projeto Gerenciamento de eventos</title>
</head>
<body>

    <main class="container-fluid mt-5">

        <h1 class="text-center fw-bold">Verificação de Upload de Arquivo</h1>
        <hr>
        <p class="lead">
            Toda vez que for feito upload de arquivos com extensão: JPG, PNG e PDF, deverá ser contado e exibido. Caso seja enviado qualquer outro arquivo com outra extensão que não seja as que foram mencionadas, deverá ser contadas como "Outros arquivos". <br>
            Existem 2 níveis de dificuldades a serem realizados. O Nível 1 é um pouco mais fácil que o Nível 2.
        </p>
        <hr>
        <form action="../controller/EventoController.php" method="post" class="mt-5" enctype="multipart/form-data">        
            <section class="container col-md-6">

                <div class="row mb-3">
                    <label for="banner" class="form-label">
                        Banner do evento <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="banner" id="banner" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary my-3 col-12">Fazer Upload</button>
            </section>
        </form>
    </main>

    <!-- AQUI DEVERÁ SER MOSTRADO O PHP -->
    <!-- NÍVEL 1 -->
    <section class="row mt-5">        
        <div class="col-md-6 bg-dark text-white">
        <h3 class="text-center">Nível 1</h3>
            <?php
                $_SESSION["arquivo"] = $arquivo->recebeArquivo($_FILES["banner"]); ;
            ?>
        </div>

        <!-- NÍVEL 2 -->
        <div class="col-md-6 bg-info">
        <h3 class="text-center">Nível 2</h3>

        </div>




    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>