<?php

$nome = "Tiago";
$nomes = array("Ribeiro","Santos");

$ip = $_SERVER["REMOTE_ADDR"];

//Informa qual o tipo da variavel
var_dump($nomes);

echo "</br>";

//Imprime o indices do array e diz a quantidade de letras deste array
print_r($nomes);

echo "</BR>";

echo "SEU IP é : ". "<b>".$ip."</b>";