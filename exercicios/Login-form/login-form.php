<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Página de Login</title>
</head>
<body>
    
    <div id="container">
        <h1>Login</h1>
    	<form action="login-form.php" method="post">
    		<label>Email</label><br>
            <input class='input' type="email" name="txt_email"><br>
    		<label>Senha</label><br>
            <input class='input' type="password" name="txt_senha"><br><label id="forgot"><a href='#'>Esqueceu a senha?</a></label>
            <div ><input  type="checkbox" name="check"><label id="mark"> Manter-me logado</label><div><br>
    		<input class="button" type="submit" name="submit" value='Entrar'>

    	</form>
    </div>
<?php

function verificar_dados($email, $senha){
    echo "<div id='res'><hr style='background-color:  #fa0090 ;'>$email <br> $senha</div>";
}

$txt_email = $_POST['txt_email'];
$txt_senha = $_POST['txt_senha'];

verificar_dados($txt_email, $txt_senha);




?>
</body>
</html>