<?php
class Veiculo{
    private $modelo;
    private $marca;
    private $ligado = false;
    protected $nomeClasse; // SOMENTE AS CLASSES FILHAS PODERAM ACESSAR ESSE ATRIBUTO DIRETAMENTE

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nomeClasse = get_class($this); // PEGANDO O NOME DA CLASSE
    }

    public function ligar(){
        $this->ligado = true;
        echo "O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} esta ligado";
    }

    public function desligar(){
        $this->ligado = false;
        echo "O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} esta desligado";
    }

    public function estaLigado(){
        echo ($this->ligado) ? "Esta ligado" : "Esta desligado";
        /*
        if($this->ligado){
            echo "O veiculo modelo {$this->modelo} e marca {$this->marca} esta ligado";
        }
        else{
            echo "O veiculo modelo {$this->modelo} e marca {$this->marca} esta desligado";
        }
        */
    }
}

// A CLASSE CARRO ESTA HERDANDO TODAS AS INFORMAÇÕES DA CLASSE VEICULO
class Carro extends Veiculo {
    public function ligarParaBrisa(){
        echo "{$this->nomeClasse} ligou o parabrisa";
    }
}

