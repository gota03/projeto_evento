<?php
date_default_timezone_set("America/Sao_Paulo"); // ALTERANDO O FUSO HORÁRIO DO SERVIDOR
$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];
echo "{$nomeEvento} vai acontecer na data {$dataEvento}";
echo "<hr>";
echo "<br>";
// MOSTRANDO VETORES DE FORMA COMPLETA
print_r($_POST);
var_dump($_POST);
function validaData($data){
    $dataEvento = new DateTime($data); // ESTA CLASSE PRECISA DE UMA DATA NO PADRÃO AMERICANO
    $dataAtual = new DateTime("now"); // ESTAMOS PEGANDO A DATA ATUAL
    echo $dataEvento->format("d/m/Y"); // MOSTRANDO A DATA NO PADRÃO BRASILEIRO
    echo "<br> A data de hoje é: ";
    print_r($dataAtual);
    if($dataEvento>=$dataAtual){
        echo "<p>Data do evento cadastrada com sucesso!</p>";
    }
    else{
        echo "<p>A data do evento não pode ser igual ou anterior a data atual</p>";
    }

   

}
validaData($dataEvento);
?>