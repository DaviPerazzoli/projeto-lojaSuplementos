<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>

            <div id="logo">
                <a href="sobre.html"></a>
            </div>
            <ul>
                <li><a href="inicio.html">Início</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
            <ul>
                <li><a href="carrinho.php"><span style="font-size: 2em" class="material-symbols-outlined">shopping_cart</span></a></li>
                <li class="selecionado"><a href="conta.php"><span style="font-size: 2em" class="material-symbols-outlined">account_circle</span></a></li>
            </ul>
    
    </header>
    <main>
        <section id="minha-conta">
            <h1>Minha Conta</h1>
            
            <?php
            
                include('conexao.php');
                
                $resultado = mysqli_query($id, "SELECT * FROM cliente where CPF=".$_SESSION['CPF']);
                $registro = mysqli_fetch_array($resultado);
                echo "<p><strong>Nome:</strong> ".$registro['nome']."</p>";
                echo "<p><strong>CPF:</strong> ".$registro['CPF']."</p>";
                echo "<p><strong>Email:</strong> ".$registro['email']."</p>";
                echo "<p><strong>UF:</strong> ".$registro['UF']."</p>";
                echo "<p><strong>Cidade:</strong> ".$registro['cidade']."</p>";
                echo "<p><strong>Bairro:</strong> ".$registro['bairro']."</p>";
                echo "<p><strong>Rua:</strong> ".$registro['rua']."</p>";
                echo "<p><strong>Número:</strong> ".$registro['numero']."</p>";
                echo "<p><strong>Complemento:</strong> ".$registro['complemento']."</p>";
                    
                
            ?>
            
            <a class="btn" href='atualizarConta.php'>Atualizar conta</a>
                
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Iron Cone. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
