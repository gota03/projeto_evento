<?php
class Login{
    public $email;
    public $senha;

    public function validaCampos($campo){
        $this->email = $campo["email"];
        $this->senha = $campo["senha"];
        print_r($campo);

        if(empty($this->email) || empty($this->senha)){
            return false;
        }
        else{
            return true;
        }
        
    }
    
}

