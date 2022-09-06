<?php
class LoginConsulta{
    private static $instancia;
    
    public static function getLogin(){
        if(!isset(self::$instancia)){ // ESTOU TESTANDO QUANDO O ATRIBUTO NÃO EXISTIR
            self::$instancia = new PDO("mysql:host=localhost;dbname=login", "root", "");
        }
        return self::$instancia;
    }
}