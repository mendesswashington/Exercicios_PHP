<?php 
/*
*Preencher um vetor
*Indentificar qual o maior número do vetor
*Indentificar qual o maior número do vetor
*Contar a quantidade de números pares
*Contar a quantidade de números impares
*A soma de todos os números pares
*A soma de todos os números impares
*/
$valor = array(1, 2, 3, 4, 5, 6, 7, 8);
$maior = $valor[0];
$menor = $valor[0];
$contPar = 0;
$contImp = 0;
$somaPar = 0;
$somaImp = 0;

echo 'Entrada de dados:';
for($i = 7; $i >= 0; $i--) {
	
	if($maior < $valor[$i]){
		$maior = $valor[$i];
	}
	if($menor > $valor[$i]){
		$menor = $valor[$i];
	}

	if($valor[$i] % 2 == 0){
		$somaPar  =  $somaPar + $valor[$i];
		$contPar++;
	}else{
		$somaImp =  $somaImp + $valor[$i];
		$contImp++;
	}

	echo $valor[$i].' ';

}


echo "<br><br>\t <center><h1>Exercicio 01<h1></center> <br><br>\t";
$lindo = str_repeat('#', 1000);
	//echo "<pre>";
	echo "$lindo<br>";
	echo "<center>";
	echo "Maior número:$maior<br>";
	echo "Menor número:$menor<br>";
	echo "Soma dos números pares :$somaPar<br>";
	echo "Soma dos números impare:$somaImp<br>";
	echo "Quantidade de números pares:$contPar<br>";
	echo "Quantidade de números impare:$contImp<br>";
	echo "</center>";
	//echo "</pre>";
	echo "$lindo";
?>