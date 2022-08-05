<?php
class Animal{
    protected $peso;
    protected $raca;
    protected $cor;
    protected $comida;
    protected const INSTINTO = "reproduzir";

    public function __construct($peso, $raca, $cor, $comida)
    {
        $this->peso = $peso;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->comida = $comida;
    }

    public function descricao(){
        echo "ola, mundo eu sou um animal da raça {$this->raca}, peso {$this->peso} minha cor é {$this->cor} e gosto de comer {$this->comida}";
    }

    public function reproduzir(){
        echo "todo animal da raça {$this->raca} tem o instinto de " .self::INSTINTO;
    }
}

class Cachorro extends Animal{
    private $bola;
    private const LATIR = "latir";

    public function __construct($peso, $raca, $cor, $comida, $bola)
    {
        parent::__construct($peso, $raca, $cor, $comida);
        $this->bola = $bola;
    }

    public function brincar(){
        echo "eu sou um cachorro da raça {$this->raca}, meu brinquedo preferido é {$this->bola} e eu gosto de " .self::LATIR;
    }
}

class Peixe extends Animal{
    private const NADAR = "nadar";
    private $escama;

    public function __construct($peso, $raca, $cor, $comida, $escama){
        parent::__construct($peso, $raca, $cor, $comida);
        $this->escama = $escama;
    }

    public function nadar(){
        echo "sou um peixe da raça {$this->raca}, minha cor é {$this->cor} e eu sei " .self::NADAR;
    }
}