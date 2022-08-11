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
        // IREMOS VERIFICAR SE A PASTA EXISTE OU NÃO
        if(!file_exists($pasta)){
            mkdir($pasta, 0777, true); // A FUNÇÃO MKDIR PRECISA DE 3 PARAMETROS: 1- NOME DA PASTA, 2- NIVEL DE PERMISÃO PARA EDITAR A PASTA, 3- SE IRA CRIAR SUBPASTAS OU NÃO
        }
        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario, $caminhoFinal);
        echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";
    }
    else{
        echo "<br> Formato de arquivo inválido";
    }
}