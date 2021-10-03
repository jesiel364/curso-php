
<form action="POST.php" method="post">
    Nome:  <input type="text" name="username" /><br />
    Email: <input type="email" name="email" /><br />
    <input type="submit" name="submit" value="Me aperte!" />
</form>

<?php
echo "<hr>";
echo $_GET['username'];
echo "<br>";
echo $_REQUEST['email'];


?>