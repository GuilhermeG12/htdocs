<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Calcular Média</h1>
        <form action="relatorio.php" method="post">
        <label for="text">Digite o seu Nome:</label><br><br>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="number">Digite sua Primeira nota:</label><br>
        <input type="number" step="0.01" name="numero1" id="primeironumber" required><br><br>
        <label for="number">Digite sua Segunda nota:</label><br>
        <input type="number" step="0.01" name="numero2" id="segundonumber" required><br><br>
        <label for="number">Digite sua Terceira nota:</label><br>
        <input type="number" step="0.01" name="numero3" id="terceironumber" required><br><br>
        <label for="number">Digite sua Quarta nota:</label>
        <input type="number" step="0.01" name="numero4" id="quartonumber" required><br><br>
        <input type="submit" value="CALCULAR" id="botao">
        </form>
    </div>
</body>

</html>