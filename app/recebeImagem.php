<?php
/*echo "<pre>";
print_r($_FILES);
echo "<pre>";*/



$nomeArquivo = $_FILES["banner"] ["name"];
$nomeTemporario = $_FILES["banner"] ["tmp_name"];

if(empty($nomeArquivo)){
    echo "<br> Arquivo vazio";
}
else{
    echo "<br> Arquivo aceito";
    $infoArquivo = pathinfo($nomeArquivo); // PATHINFO RETORNA UM ARRAY COM INFORMAÇÕES MAIS DETALHADAS DO ARQUIVO  
    echo "<br>";
    echo "<pre>";
    print_r($infoArquivo);
    echo "</pre>";

    if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
        echo "<br> Formato de arquivo aceito";
        //  COPIANDO IMAGEM PARA O SERVIDOR
        $pasta = "imagens/";
        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario, $caminhoFinal);
    }
    else{
        echo "<br> Formato de arquivo inválido";
    }
}