<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="estilização.css">
</head>
<body>
    <div class="caixa">
    <form method="POST" action="funcional.php" >
    <label for="login">Login</label><br>
    <input type="text" name="login"  autocomplete="off" required><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" autocomplete="off" required ><br><br>
    <button class="btn" type="subimit" value= "Enviar">Enviar</button><br>
    </form>
    </div>


</body>
</html>