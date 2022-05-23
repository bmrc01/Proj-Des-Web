<?php

session_start();

if(isset($_SESSION['carrinho']) && isset($_GET['id'])){
    $carrinho = $_SESSION['carrinho'];
    $id = $_GET['id'];
    $key = array_search($id, $carrinho);
    unset($carrinho[$key]);
    $_SESSION['carrinho'] = $carrinho;
}


header('Location: pagina-carrinho/');

?>