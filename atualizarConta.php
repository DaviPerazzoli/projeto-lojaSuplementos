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
            <form action="atualizarDados.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"><br><br>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
    
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha"><br><br>
    
                <label for="uf">UF:</label>
                <input type="text" id="uf" name="UF"><br><br>
    
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade"><br><br>
    
                <label for="rua">Rua:</label>
                <input type="text" id="rua" name="rua"><br><br>
    
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro"><br><br>
    
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero"><br><br>
    
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento"><br><br>
    
                <input type="submit" class="btn" value='Atualizar'>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Iron Cone. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
