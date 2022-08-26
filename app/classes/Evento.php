<?php
class Evento{
    // CRIANDO ATRIBUTOS 
    public $nomeEvento;
    public $dataEvento;
    public $banner;
    public $mensagem = []; // ESSE ATRIBUTO IRA ARMAZENAR AS INFORMAÇÕES DE ERRO E SUCCESS

    //  CRIANDO METODOS(COMPORTAMENTOS)

     /**
      * @param $campos: ESTE PARAMETRO ESPERA RECEBER UMA CONSTANTE $_POST
      * @param $arquivo: ESTE PARAMETRO ESPERA RECEBER UM VALOR COMO POR EXEMPLO $_FILES['banner']
      */

    public function inicio($campos, $arquivo){
        
        // Verificar se os campos estão em branco

        if($this->recebeDados($campos)){
            if($this->validaData($campos["dataEvento"])){
                if($this->recebeArquivo($arquivo)){
                    $this->mensagem = [
                        "status" => true,
                        "msg" => "Evento cadastrado com sucesso"
                    ];
                }
                else{
                    $this->mensagem = [
                        "status" => false,
                        "msg" => "Você precisa enviar uma imagem com o formato jpg ou png"
                    ];
                }
            }
               else{
                $this->mensagem = [
                    "status" => false,
                    "msg" => "Data do evento é anterior ao dia atual"
                ];
            }   
        }
        else {
            $this->mensagem = [
                "status" => false,
                "msg" => "Os campos não podem ficar em branco"
            ]; 
        }
        return $this->mensagem;
    }

     public function validaData($data){
        $dataEvento = new DateTime($data); // ESTA CLASSE PRECISA DE UMA DATA NO PADRÃO AMERICANO
        $dataAtual = new DateTime("now"); // ESTAMOS PEGANDO A DATA ATUAL
        
        if($dataEvento>$dataAtual){
           
            return true;
        }
        else{
            
            return false;
        }
    }

     public function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento = $campos["dataEvento"];
        if(empty($this->nomeEvento) || empty($this->dataEvento)){
            return false;
        }
        else{
            return true;
        }
       
    }

    // ESSA FUNÇÃO IRA RECEBER O COMANDO $_FILES['nome_arquivo']

    public function recebeArquivo($banner){
        
        $this->banner = $banner; // ESTOU ATRIBUINDO $_FILES["baner"] PARA $THIS->BANNER
        $this->banner["name"];

        if(empty($this->banner["name"])){
            return false;
          
        }
        else{
            
            $infoArquivo = pathinfo($this->banner["name"]); // PATHINFO RETORNA UM ARRAY COM INFORMAÇÕES MAIS DETALHADAS DO ARQUIVO 

        if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
            
        //  COPIANDO IMAGEM PARA O SERVIDOR

            $pasta = "../imagens/";

        // IREMOS VERIFICAR SE A PASTA EXISTE OU NÃO

        if(!file_exists($pasta)){
            mkdir($pasta, 0777, true); // A FUNÇÃO MKDIR PRECISA DE 3 PARAMETROS: 1- NOME DA PASTA, 2- NIVEL DE PERMISÃO PARA EDITAR A PASTA, 3- SE IRA CRIAR SUBPASTAS OU NÃO
        }

        // RENOMEANDO O ARQUIVO
        
        $novoNome = new DateTime();
        $nomeFinal = $novoNome->getTimestamp().".".$infoArquivo["extension"];

            $caminhoFinal = $pasta.$nomeFinal;
            move_uploaded_file($this->banner["tmp_name"], $caminhoFinal);
            
            $this->banner = $caminhoFinal;
            return true;
        }
        else{
            return false;
        }
        }
    }

    public function __get($atributo){
        return $this->$atributo;
    }
}