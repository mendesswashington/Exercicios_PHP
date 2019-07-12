<?php 
$valor = array(8,2,3,4,9,6,7,1,5);
$aux;

echo "Valores: ";
for ($i=0; $i < 9 ; $i++) { 
	echo "<h3>$valor[$i]<h3> ";
}

for ($i=0; $i < 9 ; $i++) { 
	for ($j=0; $j < 9; $j++) { 
		if ($valor[$i] < $valor[$j]) {
			$aux = $valor[$i];
			$valor[$i] = $valor[$j];
			$valor[$j] = $aux;
		}
	}
}
echo "<br>";
echo "<h1>Crescente<h1>";
for ($i=0; $i < 9 ; $i++) { 
	echo "<h3>$valor[$i]<h3> ";
}
echo "<br>";
echo "<h1>Decrescente<h1>";
for ($j=8; $j >= 0 ; $j--) { 
	echo "<h3>$valor[$j]<h3> ";
}
echo "<br>";

for ($i=0; $i < 9  ; $i++) {
	for ($j=0; $j < 9 ; $j++) { 
		echo "i:$i ";
		echo "j:$j ";
	}
	echo "<br> ";
}
