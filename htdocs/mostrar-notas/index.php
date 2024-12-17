<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Mostrar Resultado:</h1>
        <form action="index.php" method="post">
        <label for="number">Digite uma nota:</label><br>
        <input type="number" step="0.1" name="nota" id="number" required><br><br>
        <input type="submit" value="MOSTRAR RESULTADO" id="botao">
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nota = $_POST['nota'];
                if ($nota >= 7) {
                  echo  "<h2>Aprovado!!!</h2>";
                }else if ($nota >=5 && $nota <= 6.9) {
                    echo  "<h2>Recuperação!!!</h2>";
                } else{
                    echo  "<h2>Reprovado!!!</h2>";
                }
            }
            ?>

    </div>
</body>

</html>