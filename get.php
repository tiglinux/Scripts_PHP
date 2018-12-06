<?php

	$nome = $_GET['nome'];
	
	echo"<b>".$nome."</b>";

	$i = 1;

	while($i > 0 && $i <= 3){
		echo "</br>";
		if($i == 3){
			stop;
		}
		$i+=1;
	}

	var_dump($nome);