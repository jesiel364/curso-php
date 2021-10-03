<div>
	<form action="algoritimo-verificador.php" method="post">
		Número: <input type="number" name="num">
		<input type='submit' name="submit" value='Verificar'/>
	</form>
</div>
<hr>

<?php
$num = $_REQUEST['num'];
echo "$num <br>";

if($num < 0):
	echo "O valor informado é negativo.";
elseif($num > 0):
	echo "O valor informado é positivo.";
else:
	echo "O valor informado é igual a 0.";
endif;

?>