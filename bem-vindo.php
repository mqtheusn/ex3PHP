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
 Bem-vindo <?php echo $_SESSION['user'];?>! 
    
  
 <form method="POST" action="sair.php">
 <br><button class="btn" type="subimit" value= "Sair">Sair</button><br>
</form>
</div>
</body>
</html>