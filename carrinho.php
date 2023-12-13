<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
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
                <li class="selecionado"><a href="carrinho.php"><span style="font-size: 2em" class="material-symbols-outlined">shopping_cart</span></a></li>
                <li><a href="conta.php"><span style="font-size: 2em" class="material-symbols-outlined">account_circle</span></a></li>
            </ul>
        
    </header>

    <section id="carrinho">
        <form action='compra.php' method='post'>
        <h1>Meu Carrinho</h1>
        
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
                
                    $produtos = $_SESSION["carrinho"];
                    if(!empty($produtos)){
                        
                        echo "<table>
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>Quantidade</th>
                                    </tr>
                                </thead>
                                <tbody id='tabela'>";
                    
                        include('conexao.php');
                        
                        $numero = 0;
                        foreach($produtos as $produto){
                            $resultado = mysqli_query($id, "SELECT preco FROM produto where nome='$produto'");
                            $registro = mysqli_fetch_array($resultado);
                            echo "  <tr>
                                        <td>$produto</td>
                                        <td>".converteNumero($registro['preco'])."<input type='hidden' value='".$registro['preco']."' name='preco$numero'></td>
                                        <td><input type='number' value='1' min='1' name='quantidade$numero'></td>
                                        
                                    </tr>";
                                    $numero++;
                        }
                        echo '</tbody>
                            </table>
                            
                            <input type="submit" class="btn" value="Finalizar Compra"> </form>
                            <form action="limparCarrinho.php" method="post">
                            <input type="submit" class="btn" value="Esvaziar Carrinho">
                            </form>';
                    }else{
                        echo "Nenhum produto no carrinho...";
                    }
                ?>
                
            
        
    </section>

    <footer>
        <p>&copy; 2023 Iron Cone. Todos os direitos reservados.</p>
    </footer>
    </body>
</html>
