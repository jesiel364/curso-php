<?php
// 	ESCOPO GLOBAL
$nome = 'LF BINSFELD';
$a = 1;
$b = 4;
$c = 8;


function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";
/////////////////////////

function exibeCidade(){
	global $cidade;
	$cidade = 'Rio de Janeiro';
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();