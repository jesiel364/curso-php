<?php
// Arrays
$carros = array('BMW', 'Veloster', 'Hilux');
$carros[10] = 'Amarok';
print_r($carros);

echo "<hr>";

$motos = array();
$motos[] = 'Yamaha';
$motos[] = 'Honda';
$motos[3] = 'Suzuki';
echo $motos[3];
echo "<hr>";

//Count
echo count($carros);
echo "<hr>";

// Foreach
foreach($motos as $valor){
	echo $valor."<br>";
}
echo "<hr>";

//Arrays Associativos
$pessoa = array('nome'=> 'Jesiel', 'idade'=> 20);
$pessoa['cidade'] = 'Boa Vista';

foreach($pessoa as $indice => $valor){
	echo $indice." $valor<br>";
}