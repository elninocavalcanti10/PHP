<?php

$pessoa = array(
	0 => array(
		"nome" => "Adolpho",
		"idade" => 26,
		"salario" => 3500.5,
		"online" => true
	),
	1 => array(
		"nome" => "Messi",
		"idade" => 31,
		"salario" => 3500000.5,
		"online" => true
	)
);

$pessoa[] = array(
	"nome" => "Cristiano Ronaldo",
	"idade" => 33,
	"salario" => 3577000.5,
	"online" => true
);

$pessoa[] = "string";
$pessoa[] = 7; //int
$pessoa[] = 7.7; //float
$pessoa[] = true; //boolean

print_r($pessoa); 

?>