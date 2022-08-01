<?php
class Pessoa{
    private $nome;
    private $idade;
    private $peso;
    private $hobbie;
    private $comida;

    function __construct($nome, $idade, $peso, $hobbie, $comida) // O METODO CONSTRUTOR IRA INICIALIZAR OS ATRIBUTOS COM VALORES DINAMICOS
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->hobbie = $hobbie;
        $this->comida = $comida;
    }

    function falar(){
        echo "Olá mundo, sou uma pessoa";
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function __set($atributo, $valor){
        if($atributo == "nome"){
            $this->$atributo = strtoupper($valor);
        }
        else{
            $this->$atributo = $valor;
        }
    }
    /*
    function getNome(){
        return strtoupper($this->nome); // RETORNA O NOME MAIUSCULO
    }

    function setNome($valor){
        $this->nome = $valor;
    }
    */

    function gostos(){
        echo "eu gosto de {$this->hobbie} e {$this->comida}";
    } 
    
}

$pessoa1 = new Pessoa("Mateus", 19, 70, "escutar musica", "lasanha");
//$pessoa1->setNome("Agostinho Carrara");
$pessoa1->nome = "Agostinho Carrara";
$pessoa1->idade = 40;
echo "{$pessoa1->nome} tem {$pessoa1->idade} anos e pesa {$pessoa1->peso}Kg";
/*
$pessoa1->falar(); // ACESSANDO O METODO FALAR DA CLASSE
echo "<br>";
$pessoa1->nome = "neymar";
echo "<br>";
echo "Meu nome é {$pessoa1->nome} e minha idade é {$pessoa1->idade}, eu gosto de {$pessoa1->hobbie} e comer {$pessoa1->comida}";
echo "<br>";
$pessoa1->gostos();
echo "<br>";
$pessoa2 = new Pessoa("Maria", 33, 64, "ler", "batata frita");
echo "<br>";
echo "ola me chamo {$pessoa2->nome} e minha idade é {$pessoa2->idade}, eu gosto de {$pessoa2->hobbie} e comer {$pessoa2->comida}";
*/
