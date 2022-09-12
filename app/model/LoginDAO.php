<?php
include_once("../classes/Login.php");
include_once("../model/LoginConexao.php");

class LoginDAO{
    private $tabela = "login";
    public function consultarUnico($email, $senha){
        $sql = "SELECT * FROM {$this->tabela} WHERE email = :email AND senha = :senha";
        $preparacao = LoginConsulta::getLogin()->prepare($sql);
        
        $preparacao->bindValue(":email", $email);
        $preparacao->bindValue(":senha", $senha);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            return $preparacao->fetchALL(PDO::FETCH_ASSOC);// o método fecthALL() retorna todos os registros do banco de dados e o valor PDO::FETCH_ASSOC, faz a associação do nome dos campos da tabela com os indices do vetor.
        }
        else{
            return false;
        }
    }
}