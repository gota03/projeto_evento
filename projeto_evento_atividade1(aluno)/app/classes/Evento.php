<?php
 class Arquivo{
    public $arquivo;
    public $contaArquivo = [];
    

    public function recebeArquivo($banner){
        $this->arquivo = $banner;

        
        if(!isset($_SESSION["PNG"])){
            $_SESSION["PNG"] = 0;
        }
        if(!isset($_SESSION["PDF"])){
            $_SESSION["PDF"] = 0;
        }
        if(!isset($_SESSION["outrosArquivos"])){
            $_SESSION["outrosArquivos"] = 0;
        }

        if(empty($this->arquivo["name"])){
            echo "arquivo vazio";
        }
        else{
            $infoArquivo = pathinfo($this->arquivo["name"]);
            echo "<pre>";
            print_r($infoArquivo);
            echo "</pre>";
            

            if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png" || $infoArquivo["extension"] == "pdf"){
                if($infoArquivo["extension"] == "jpg"){
                    if(!isset($_SESSION["JPG"])){
                        $_SESSION["JPG"] = 0;
                    }
                    $_SESSION["JPG"]++;
                }
                elseif($infoArquivo["extension"] == "png"){
                    $_SESSION["PNG"]++;
                }
                elseif($infoArquivo["extension"] == "pdf"){
                    $_SESSION["PDF"]++;
                }
                
                }
                elseif($infoArquivo["extension"] != "jpg" && $infoArquivo["extension"] != "png" && $infoArquivo["extension"] != "pdf"){
                    $_SESSION["outrosArquivos"]++;
                }
                return $this->contaArquivo = [
                    "Total de Arquivos JPG" => $_SESSION["JPG"],
                    "Total de Arquivos PNG" => $_SESSION["PNG"],
                    "Total de Arquivos PDF" => $_SESSION["PDF"],
                    "Total de Outros Arquivos" => $_SESSION["outrosArquivos"]
                    ];
                    
            }
}
}
