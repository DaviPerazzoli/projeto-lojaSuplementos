<?php
    session_start();
    $id = mysqli_connect('localhost', 'id21408895_cone', 'Conifera123.');
    $email = $_POST['login'];
    $senha = $_POST['senha'];

    if($id){
       
        try{
            
            mysqli_select_db($id, 'id21408895_loja_suplementos');
            
            $resultado = mysqli_query($id, "SELECT CPF, email, senha FROM cliente WHERE email='$email'");
            $registro = mysqli_fetch_array($resultado);
            
            if($email != $registro['email'] or $senha != $registro['senha']){
                echo "<script> alert('Senha ou email incorretos.')</script>";
                include('index.html');
                exit;
            }
            
            $_SESSION['CPF'] = $registro['CPF'];
            $_SESSION['carrinho'] = array();
            $_SESSION['email'] = $email;
            
            include('inicio.html');
            
        }catch(Exception $erro){
            echo "<script> alert('Ocorreu um erro. $erro')</script>";
            include('index.html');
        }
    }
    
    

?>