<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="get">
        <div class="container">
            <h1>Verificar Numeros Pares:</h1><br><br>
            <label for="number">Digite um numero:</label><br>
            <input type="number" name="number" id="number" required><br>
            <br><br><br>
            <input type="submit" value="Verificar" id="botao"><br><br>
            </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                echo "<h2>Os numeros são: ";
                    $y = $_GET['number'];
                    for ($x = 0; $x <= $y = $_GET['number']; $x++) {
                        if ($x % 2 == 0) {
                            echo "$x ";
                        }
                    }
                echo " </h2>";
                }
                
                ?>
            
        </div>





</body>

</html>