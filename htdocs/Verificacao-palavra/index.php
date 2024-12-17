<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="post">
        <div class="container">
            <h1>Calculadora Simples</h1><br><br>
            <label for="texte">Digite uma palavra:</label><br>
            <input type="text" name="palavra" id="palavra" required><br>
            <br><br><br>
            <input type="submit" value="Verificar" id="botao"><br><br>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $palavra = strtolower(str_replace(' ', '', $_POST['palavra']));
                $verificar = strrev($palavra);

                if ($palavra === $verificar){
                    echo "<h2>A palavra: ",$verificar," é um Palíndromo</h2>";
                }else{
                    echo "<h2>A palavra: ",$_POST['palavra']," não é um Palíndromo</h2>";
                }
                }
            


            ?>
        </div>
    </form>




</body>

</html>