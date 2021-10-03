
<form action="POST.php" method="get">
    Nome:  <input type="text" name="username" /><br />
    Email: <input type="email" name="email" /><br />
    <input type="submit" name="submit" value="Me aperte!" />
</form>

<?php
echo "<hr>";
echo $_REQUEST['username'];
echo "<br>";
echo $_REQUEST['email'];


?>