<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIDADES</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
        <div class="container">
        <form action="index.php" method="post">
            <h1>Mostrar Cidades:</h1>
            <label for="texte">Escreva a primeira cidade:</label><br>
            <input type="text" name="cidade1" id="palavra" required><br><br><br>
            <label for="texte">Escreva a segunda cidade:</label><br>
            <input type="text" name="cidade2" id="palavra" required><br><br><br>
            <label for="texte">Escreva a terceira cidade:</label><br>
            <input type="text" name="cidade3" id="palavra" required><br><br><br>
            <label for="texte">Escreva a Quarta cidade :</label><br>
            <input type="text" name="cidade4" id="palavra" required><br><br><br>
            <label for="texte">Escreva a Quinta cidade :</label><br>
            <input type="text" name="cidade5" id="palavra" required><br><br><br>
            <input type="submit" value="MOSTRAR CIDADES" id="botao"><br><br>
           
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<h2>As cidades inseridas são: ";
                $cidades = [$_POST['cidade1'], $_POST['cidade2'], $_POST['cidade3'], $_POST['cidade4'], $_POST['cidade5']];
                echo "$cidades[4], $cidades[3], $cidades[2], $cidades[1], $cidades[0]";
                }
                
                ?>
            
        </div>
   
        </form>



</body>

</html>