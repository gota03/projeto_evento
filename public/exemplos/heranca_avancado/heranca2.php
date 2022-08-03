<?php

use Pessoa as GlobalPessoa;

class Pessoa{
    protected $nome;
    protected $idade;
    protected $nomeClasse;
    protected const QUALIDADE = "pensar";

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nomeClasse = get_class($this);
    }

    public function relatorio(){
        echo "Olá estou na classe {$this->nomeClasse}, meu nome é {$this->nome} e tenho {$this->idade} anos e minha qualidade é " .self::QUALIDADE; // CONSTANTES EM PHP SÃO ACESSADOS COM SELF:: E NAO $THIS
    }
}

class Aluno extends Pessoa{
    private $matricula;
    protected const QUALIDADE = "estudar";
    
    public function __construct($nome, $idade, $matricula){
        parent::__construct($nome, $idade); // DESSA FORMA ESTOU INDICANDO QUE VOU REUTILIZAR O CONSTRUTOR DA CLASSE MÃE
        $this->matricula = $matricula;
    }

    public function relatorio(){
        echo "estou na classe {$this->nomeClasse}, meu nome é {$this->nome} e minha matricula é {$this->matricula} minha qualidade é " .self::QUALIDADE;
    }
}