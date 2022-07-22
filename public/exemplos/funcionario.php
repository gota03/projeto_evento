<?php
class Funcionario{
    public $nome;
    public $codigo;
    public $salario;

    function __construct($nome, $codigo, $salario)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salario = $salario;

    }

    function relatorio(){
        echo "ola me chamo {$this->nome}, meu codigo é {$this->codigo} e meu salario é {$this->salario}";

    }

}

$funcionario = new Funcionario("Mateus", 0001, 1200);
$funcionario->relatorio();
echo "<hr>";
