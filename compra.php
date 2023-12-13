<?php

    session_start();
    $CPF = $_SESSION['CPF'];
    include('conexao.php');
    
    $produtos = $_SESSION["carrinho"];
    if(!empty($produtos)){
        $numero = 0;
        $precoTotal = 0;
        
        foreach($produtos as $produto){
            $quantidade = $_POST["quantidade$numero"];
            $preco = $_POST["preco$numero"];
            $precoTotal += intval($quantidade) * floatval($preco);
            
            $numero++;
        }
        
        $dataHoraAtual = date("d-m-Y H:i:s");
        
        $resultado = mysqli_query($id, "INSERT INTO `pedido`(`ID`, `valor_total`, `data`, `CPF_cliente`) VALUES (".mt_rand(10000000, 99999999).",'$precoTotal','$dataHoraAtual','$CPF')");
        
        $_SESSION["carrinho"] = array();
        include('inicio.html');
        echo "<script>alert('Compra finalizada com sucesso!')</script>";
    }else{
        echo "<script>alert('Não há itens no carrinho...')</script>";
        include('produtos.php');
    }
?>