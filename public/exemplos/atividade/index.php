<?php
require("atv.php");
$animal = new Animal(10, "gato", "branco", "peixe");
$animal->descricao();
echo "<hr>";
$animal->reproduzir();
echo "<hr>";
$cachorro = new Cachorro(15, "poodle", "preto", "carne", "bola");
$cachorro->brincar();
echo "<hr>";
$peixe = new Peixe(5, "tilapia", "prata", "arroz", "espetada");
$peixe->nadar();