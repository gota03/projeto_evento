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
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

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

                        <a href="../view/VisualizarEventoView.php" class="nav-link mt-1">Eventos</a>

                    </li>

                    <li class="nav-item">

                        <a href="../controller/Logout.php" class="nav-link mt-1">Logout</a>

                    </li>

                </ul>

            </div>

        </div>

      </nav>

  </header>