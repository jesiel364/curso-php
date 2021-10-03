<form action="soma.php" method="post">
    Valor 1:  <input type="number" name="n1" /><br />
    Valor 2: <input type="number" name="n2" /><br />
    <input type="submit" name="submit" value="Somar" />
</form>

<?php
$a = $_POST['n1']; 
$b = $_REQUEST['n2'];

function soma($v1, $v2){
	echo $v1 + $v2;
}

soma($a, $b);
?>