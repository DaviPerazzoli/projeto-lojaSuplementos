<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Cone - Produtos</title>
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
                <li class="selecionado"><a href="produtos.html">Produtos</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
           <ul>
                <li><a href="carrinho.php"><span style="font-size: 2em" class="material-symbols-outlined">shopping_cart</span></a></li>
                <li><a href="conta.php"><span style="font-size: 2em" class="material-symbols-outlined">account_circle</span></a></li>
            </ul>
        
    </header>
    <main>
    <form action='pesquisa.php' method='post' id="pesquisa">
        <input type='text' name='pesquisaProd' id='pesquisaProd'>

        <input class="material-symbols-outlined" type='submit' value='search'>

        
    </form>
    <h1 id="titulo-produtos">Nossos Produtos</h1>
    
    <section id="produtos">
    <?php
        function converteNumero($numero){
            $valor = explode('.', $numero);
            if(count($valor) == 1){
                $valor[0] = $valor[0].',00';
                
            }elseif($valor[1] < 10){
                $valor[1] = $valor[1].'0';
            }
            $valor = implode(',', $valor);
            return $valor;
        }
    
        include('conexao.php');
        
        $resultado = mysqli_query($id, "SELECT * FROM produto");
            while($registro = mysqli_fetch_array($resultado)){
                echo '<div class="produto">
                <form action="adicionarCarrinho.php" method="post">
            <img src="'.$registro['imagem'].'" alt="'.$registro['nome'].'">
            <h2>'.$registro['nome'].'</h2>
            <p class="descricao">'.$registro['descricao'].'</p>
            <p><strong>Preço: R$ '.converteNumero($registro['preco']).'</strong></p>
            <input type="hidden" value="'.$registro['nome'].'" name="nome">
            <input class="btn" type="submit" value="Adicionar ao Carrinho">
            </form>
            </div>';
            }
    
    ?>

    </section>
    </main>
    <footer>
        <p>&copy; 2023 Iron Cone. Todos os direitos reservados.</p>
        <a href="fisica.html"id="fisica" class="btn">Ver cálculo calórico</a>
    </footer>
</body>
</html>
