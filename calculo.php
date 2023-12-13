<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Cone - Cálculo de Trabalho</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body id="bodyCalc">
     <a href="produtos.php" id="voltar" class="btn">Voltar</a>
    <main id="mainCalculo">
        <form action="calculo.php" method="post" id="formCalculo">
            <h2>Quantos metros você consegue se deslocar com as calorias dos nossos suplementos?</h2>
            <div class="campo">
        		<label for="suplemento">Selecione o suplementon:</label>
        		<select id="suplemento" name="suplemento">
        			<option value="WheyIso">Whey Protein Isolado</option>
        			<option value="WheyCon">Whey Protein Concentrado</option>
        			<option value="WheyBar">TOP Whey Bar</option>
        		</select>
    		</div>
    		<div class="campo">
        		<label for="porcoes">Quantas porções você deseja? (1 porção = 30g)</label>
        		<input type="number" id="porcoes" value="1" name="porcoes" min="1" max="100">
    		</div>
    		<div class="campo">
        		<label for="peso">Qual é o seu peso? (em kg)</label>
        		<input type="number" id="peso" name="peso" min="1" max="500">
    		</div>
    		<div class="campo">
        		<input type="submit" class="btn" value="Calcular">
    		</div>
	</form>
    	<div id="resultado">
            <?php
                $peso = $_POST['peso'];
                $porcoes = $_POST['porcoes'];
                $suplemento = $_POST['suplemento'];
                
                if($suplemento === 'WheyIso'){
                    $energia = 454;
                    $suplemento = "Whey Portein Isolado";
                }elseif($suplemento === 'WheyCon'){
                    $energia = 512;
                    $suplemento = "Whey Portein Concentrado";
                }elseif($suplemento === 'WheyBar'){
                    $energia = 538;
                    $suplemento = "TOP Whey Bar";
                }
                
                $deslocamento = $energia*$porcoes / $peso*10;
                if($porcoes == 1){
                    echo "Você pode se deslocar $deslocamento km com $porcoes porção de $suplemento.";
                }else{
                    echo "Você pode se deslocar $deslocamento km com $porcoes porções de $suplemento.";
                }
            ?>  
        </div>
    </main>
    <footer style="background-color: transparent"></footer>
</body>
</html>