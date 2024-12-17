<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Numeros</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
        <div class="container">
        <form action="index.php" method="post">
            <h1>Somar Numeros:</h1>
            <h2>Exemplo: [5, 10, 15, 20, 25]</h2>
            <input type="submit" value="MOSTRAR RESULTADO" id="botao"><br><br>
           
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<h2>A soma dos numeros é: ";
                $numeros = [5, 10, 15, 20, 25];
                   $soma = $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4];
                echo "$soma";
                }
                
                ?>
            
        </div>
   
        </form>



</body>

</html>