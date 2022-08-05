<?php
class Funcionario{
    private static $nome;
    private static $salario;

    public static function relatorio($nome, $salario){
        self::$nome = $nome;
        self::$salario = $salario;
        echo "ola ".self::$nome." seu salario é ".self::$salario." ";
    }
}