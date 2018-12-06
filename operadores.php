<?php

	$num1 = 100.4;
	$num2 = 300.30;
	$total = (int)$num1 + $num2;	// Converto em inteiro.

	$num1 = 30;
	$num2 = 2;

	$logico1 = 10;
	$logico2 = 3;




	function mostrarInteiros(){
		global $total;
		echo "O valor total é : R$"."<b>".$total."</b>";
	}

	function mostrarRestos(){
		global $num1,$num2;
		echo "O Resto toal é : "."<b>".($num1 % $num2)."</b>";
	}

	function mostrarLogicos(){
		global $logico1,$logico2;
		//var_dump avalia o tipo da variavel(resultado) no caso logico.Mostra uma representação estruturada.
		var_dump($logico1 > $logico2);
	}

	mostrarInteiros();
	echo "</br>";
	mostrarRestos();
	echo "</br>";
	mostrarLogicos();


?>