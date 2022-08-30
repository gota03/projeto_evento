<?php
session_start();
include_once("../classes/Evento.php");

$arquivo = new Arquivo();
$_SESSION["arquivo"] = $arquivo->recebeArquivo($_FILES["banner"]);
echo "<pre>";
print_r($_SESSION["arquivo"]);
echo "</pre>";