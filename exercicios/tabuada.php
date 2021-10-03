<div>
	<form action="tabuada.php" method="post">
		Número: <input type="number" name="num">
		<input type='submit' name="submit" value='Verificar'/>
	</form>
</div>
<hr>

<?php
$num = $_REQUEST['num'];
for ($count =1; $count < 11; $count++):
	echo "$num x $count = ".$num*$count."<br>";
endfor;
?>