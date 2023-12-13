<?php
    $id = mysqli_connect('localhost', 'id21408895_cone', 'Conifera123.');
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cSenha = $_POST['csenha'];
    $UF = $_POST['UF'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    
    if($senha !== $cSenha){
        include('cadastro.html');
        echo "<script> alert('As senhas precisam ser iguais.')</script>";
        exit;
    }
    
    if($id){
       
        try{
            mysqli_select_db($id, 'id21408895_loja_suplementos');
            $resultado = mysqli_query($id, "INSERT INTO cliente(CPF, nome, email, senha, UF, cidade, bairro, rua,numero, complemento) VALUES ('$CPF','$nome','$email','$senha', '$UF','$cidade','$bairro','$rua','$numero','$complemento')");
            include('index.html');
        }catch(Exception $erro){
            echo "<script> alert('Ocorreu um erro. $erro')</script>";
        }
    }
    
    

?>