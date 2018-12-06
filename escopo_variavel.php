<?php
	//Escopo de variavel -> Significa ate aonde a variavel será enxergada
	//variaveis globais e locais.

	$nome = "Tiago";	//variavel que existe nas 2 funções
	$idade = 27;

	function mostrarNome(){
		// Para a variavel $nome ser com o valor "Tiago"ser lida na função é necessário
		// colocar o global antes da variavel -> global $nome_var;
		global $nome;
		echo "Seu nome é :"."<b>"." ".$nome."</b>";
	}

	function mostrarNome2(){
		//Variavel $nome é local dentro desta função.e mudei o valor.
		
		$nome ="Lucas";
		echo "Seu nome é :"."<b>"." ".$nome."</b>";
	}

	mostrarNome();
	echo "</br>";
	mostrarNome2();

?>
