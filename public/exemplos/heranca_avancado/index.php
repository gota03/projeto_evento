<?php
require ("heranca2.php");
$pessoa = new Pessoa("mateus", 19);
$pessoa->relatorio();
echo "<hr>";
$aluno = new Aluno("mateus", 19,1);
$aluno->relatorio();