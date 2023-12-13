<?php

    session_start();
    
    if(!in_array($_POST['nome'], $_SESSION['carrinho'])){
        $_SESSION['carrinho'][] = $_POST['nome'];
    }
    
    include('produtos.php');

?>