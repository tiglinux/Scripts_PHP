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

for($i = 0; $i < 10;$i+=2){
	if(!($i == 8)){
		echo("</br>".$i);
	}
	else {
		if($i == 8){
			$i+= 1;
			stop;
			echo("</br>"."<b>".$i."</b>");
		}
	}
}