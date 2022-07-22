<?php
class Evento{
    // CRIANDO ATRIBUTOS 
    public $nomeEvento;
    public $dataEvento;

    //  CRIANDO METODOS(COMPORTAMENTOS)
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
    function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento = $campos["dataEvento"];
        echo "{$this->nomeEvento} vai acontecer na data {$this->dataEvento}";
    }
}

// INSTANCIANDO UM OBJETO
$meuEvento = new Evento();
print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeDados($_POST);