<?php
    error_reporting(0);
    session_start();
    
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $UF = $_POST['UF'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    
    if(!empty($nome)){
        $resultado = mysqli_query($id, "UPDATE cliente SET nome='$nome' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($email)){
        $resultado = mysqli_query($id, "UPDATE cliente SET email='$email' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($senha)){
        $resultado = mysqli_query($id, "UPDATE cliente SET senha='$senha' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($UF)){
        $resultado = mysqli_query($id, "UPDATE cliente SET UF='$UF' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($cidade)){
        $resultado = mysqli_query($id, "UPDATE cliente SET cidade='$cidade' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($rua)){
        $resultado = mysqli_query($id, "UPDATE cliente SET rua='$rua' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($numero)){
        $resultado = mysqli_query($id, "UPDATE cliente SET numero='$numero' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($bairro)){
        $resultado = mysqli_query($id, "UPDATE cliente SET bairro='$bairro' where CPF=".$_SESSION['CPF']);
    }
    if(!empty($complemento)){
        $resultado = mysqli_query($id, "UPDATE cliente SET complemento='$complemento' where CPF=".$_SESSION['CPF']);
    }

    echo "<script>alert('Dados atualizados com sucesso')</script>";
    include('conta.php');

?>