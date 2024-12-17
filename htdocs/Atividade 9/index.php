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
            <h1>Media alunos:</h1>


            <h2><label for="text">Escreva o nome do aluno:</label></h2><br>
            <input type="text" name="nome1" id="palavra" required><br><br><br>
            <label for="number">Escreva a primeira nota Matematica:</label><br>
            <input type="number" name="nota1" id="palavra" required><br><br><br>
            <label for="number">Escreva a segunda nota Português:</label><br>
            <input type="number" name="nota2" id="palavra" required><br><br><br>
            <label for="number">Escreva a terceira nota Ciências:</label><br>
            <input type="number" name="nota3" id="palavra" required><br><br><br>


            <input type="submit" value="MOSTRAR CIDADES" id="botao"><br><br>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $array = [$_POST['nome1'],$_POST['nota1'],$_POST['nota2'],$_POST['nota3']];

            $media = ($array[1] + $array[2] + $array[3]) / 3;

            echo "<h3>O aluno $array[0] teve a média de: $media pontos </h3>";


            }

            ?>

    </div>

    </form>



</body>

</html>