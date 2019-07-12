<?php 
#Diagonal principal
$mat= [[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]];

for ($i=0; $i < 4; $i++) { 
	for ($j=0; $j < 4; $j++) {
		
		if($i == $j){
			$mat[$i][$j] = 0;
		}

		if($mat[$i][$j] <= 9 AND $mat[$i][$j] >= 0){
			print "&nbsp &nbsp".$mat[$i][$j]." ";
		}else{
			print "&nbsp".$mat[$i][$j]." ";
		}
		
		if($j == 3){
			print "<br>\n";
		}
	}
}

print"<br/><br/>\n\n";

for($i=0; $i < 4 ; $i++) {
	for($j=0; $j < 4; $j++){
		print $mat[$i][$j]." ";
	}
}