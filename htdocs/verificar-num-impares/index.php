<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Num Impares</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
        <div class="container">
        <form action="index.php" method="post">
            <h1>Verificar Numeros Impares:</h1><br>
            <input type="submit" value="MOSTRAR NUMEROS" id="botao"><br><br>
           
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<h2>Os numeros são: ";
           
                    for ($x = 0; $x <= 50; $x++) {
                        if ($x % 2 != 0) {
                            echo "$x ";
                        }
                    }
                echo " </h2>";
                }
                
                ?>
            
        </div>
   
        </form>



</body>

</html>