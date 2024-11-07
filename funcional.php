
<?php
session_start();
$login = $_POST["login"];
$senha = $_POST["senha"];


if($login == "admin"&& $senha=="1234"){

    $_SESSION['user']='Administrador';

}elseif($login =="visit"&&$senha=="12345"){

    $_SESSION['user']= "Visitante";

}elseif($login =="colab"&&$senha=="123456"){

    $_SESSION['user']= "Colaborador";
    
}else{

    header("Location:index.php");
    exit();
    
}

header("Location:bem-vindo.php");

