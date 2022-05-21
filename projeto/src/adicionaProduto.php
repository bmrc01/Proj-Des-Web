<?php
session_start();

if(!isset($_SESSION['nome'])){
    header('Location: pagina-login/index.php');
}

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];

    $_SESSION['carrinho'][] = $_GET['id'];
}else{
    if(isset($_GET['id'])){
        $_SESSION['carrinho'][] = $_GET['id'];
    }
}

header("Location: pagina-carrinho/index.php");
?>