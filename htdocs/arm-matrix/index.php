<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Gerar e Exibir:</h1>
        <form action="index.php" method="post">
            <input type="submit" value="Gerar Numeros" id="botao">


            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $num1 = rand(1, 100);
                $num2 = rand(1, 100);
                $num3 = rand(1, 100);
                $num4 = rand(1, 100);
                $num5 = rand(1, 100);
                $num6 = rand(1, 100);
                $num7 = rand(1, 100);
                $num8 = rand(1, 100);
                $num9 = rand(1, 100);
                $num10 = rand(1, 100);
                $num11 = rand(1, 100);
                $num12 = rand(1, 100);
                $num13 = rand(1, 100);
                $num14 = rand(1, 100);
                $num15 = rand(1, 100);
                $num16 = rand(1, 100);



                $numbers = array(
                    array($num1, $num2, $num3, $num4),
                    array($num5, $num6, $num7, $num8),
                    array($num9, $num10, $num11, $num12),
                    array($num13, $num14, $num15, $num16)
                );


                echo "<h2></h2>Os Numeros gerados são: </h2>";
                echo "<br>";
                echo "<h3>";
                echo $numbers[0][0], " " . $numbers[0][1], " " . $numbers[0][2], " " . $numbers[0][3];
                echo "<br>";
                echo $numbers[1][0], " " .  $numbers[1][1], " " .  $numbers[1][2], " " .  $numbers[1][3];
                echo "<br>";
                echo $numbers[2][0], " " .  $numbers[2][1], " " .  $numbers[2][2], " " .  $numbers[2][3];
                echo "<br>";
                echo $numbers[3][0], " " .  $numbers[3][1], " " .  $numbers[3][2], " " .  $numbers[3][3];
                echo "<br>" . "<h3>";

                echo "<br>";
                echo "Os Numeros pares são:";
                echo "<br>";


                $i = 0;
                for ($i = 0; $i <= 3; $i++) {
                    for ($j=0; $j < 3; $j++) { 
                        if ($numbers[$i][$j] % 2 == 0) {
                            echo $numbers[$i][$j] . " " ;
                        }
                    }
                    
                }
                
            }

            ?>
        </form>
    </div>
</body>

</html>