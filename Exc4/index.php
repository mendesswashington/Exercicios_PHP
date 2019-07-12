<?php

$qtd_idade     = array();
$qtd_sexo 	   = array();
$qtd_categotia = array();


$nome  		= array('Alex','Junio','Maria','Juliana');
$idade 		= array(31, 25, 29, 23);
$sexo  		= array('M', 'M', 'F', 'F');
$categoria	= array('Ação','Romance','Animação','Terror');
$flag = 1;
for($i=0; $i<40;$i++){
    
    print"-";
    
    if($i == 19 && $flag == 1){
        $flag = 0;
        print" Exercicio 5 ";
    }
}
print"<br>\n";
foreach($nome as $nomes){
    print $nomes." ";
}
print"<br>\n";
foreach($idade as $idades){
    print $idades." ";
}
print"<br>\n";
foreach($sexo as $sexos){
    print $sexos." ";
}
print"<br>\n";
foreach($categoria as $categorias){
    print $categorias." ";
}
print"<br>\n";
for($i=0; $i<55;$i++){
    
    print"-";
}
