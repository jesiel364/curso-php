<?php
/********* ESCALARES  *********/
// Strings
$msg = 'Olá mundo, 234!@#';
var_dump($msg);

if(is_string($msg)):
	echo "É uma string;";
else:
	echo 'Não é uma string;';
endif;
echo "<hr>";

// Inteiros
$idade = 20;
var_dump($idade);
if(is_int($idade)):
	echo 'É um inteiro.';
else:
	echo 'Não é um inteiro.';
endif;
echo "<hr>";

// Boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo 'É um valor booleano.';
else:
	echo 'Não é um valor booleano.';
endif;
echo "<hr>";

/********* COMPOSTOS  *********/

$carros = array('Gol', 'Uno', 'Camaro');
var_dump($carros);
echo "<hr>";

// Object
class Cliente{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome('Binsfeld');
var_dump($cliente);

if(is_object($cliente)):
	echo 'É um objeto.';
else:
	echo 'Não é um objeto.';
endif;
