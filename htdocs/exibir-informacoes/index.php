<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Idades</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
        <div class="container">
        <form action="resultado.php" method="post">
            <h1>Informações:</h1>
            <label for="text">Escreva o Titulo do Livro:</label><br>
            <input type="text" name="titulo" id="palavra" required><br><br><br>
            <label for="text">Escreva o(a) Autor(a) do Livro:</label><br>
            <input type="text" name="autor" id="palavra" required><br><br><br>
            <label for="number">Digite o ano de publicação do Livro:</label><br>
            <input type="number" name="ano" id="palavra" required><br><br><br>
            <label for="number">Digite o Preço do Livro:</label><br>
            <input type="number" step="0.01" name="preco" id="palavra" required><br><br><br>


            <input type="submit" value="CALCULAR MEDIAS" id="botao"><br><br>
            
        </div>
   
        </form>



</body>

</html>