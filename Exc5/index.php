<?php

//header('Content-type: application/json');
$body = file_get_contents('php://input');
$path = explode('/',$_GET['path']);
$contents = file_get_contents('dados.json');

$json = json_decode($contents);
$method = $_SERVER['REQUEST_METHOD'];
$array = (array) $json;


if($method === 'GET'){
	if($array[$path[0]]){
		echo "<pre>";
		var_dump ( $array[$path[0]] );
		echo "</pre>";
	}else{
		echo "[]";
	}
}


