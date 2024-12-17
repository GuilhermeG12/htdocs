<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

        <div class="container">

            <h1>Valores Armazenados:</h1>
    
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $valores =[$_POST['titulo'],$_POST['autor'],$_POST['ano'],$_POST['preco']];

                echo "<h2>O titulo do Livro é: $valores[0] <br>";
                echo "O(A) Autor(a) do Livro é: $valores[1] <br>";
                echo "O Ano de publicação é: $valores[2] <br>";
                echo "O Preço do livro é: $valores[3] </h2><br>";
                }
                
                ?>
            
        </div>
   



</body>

</html>