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
            <h1>Calculadora Simples</h1>
            <label for="number">Digite o Primeiro Numero:</label><br>
            <input type="number" step="0.01" name="numero1" id="primeironumber" required><br><br>
            <label for="number">Digite o Segundo Numero:</label><br>
            <input type="number" step="0.01" name="numero2" id="segundonumber" required><br><br>
            <label for="operadores">Escolha um operador:</label>
            <select name="operadores" id="operadores">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisao</option>
            </select><br><br><br><br>
            <input type="submit" value="CALCULAR" id="botao"><br><br>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $operador = $_POST['operadores'];

                switch ($operador) {
                    case 'soma':
                        $result = $_POST['numero1'] + $_POST['numero2'];
                        echo "<h2>A soma dos numeros é: $result<h2>";
                        break;
                    case 'subtracao':
                        $result = $_POST['numero1'] - $_POST['numero2'];
                        echo "<h2>A subtração dos numeros é: $result<h2>";
                        break;

                    case 'multiplicacao':
                        $result = $_POST['numero1'] * $_POST['numero2'];
                        
                        echo "<h2>A multiplicação dos numeros é: $result<h2>";
                        break;

                    case 'divisao':
                        if ($_POST['numero2'] == 0) {
                            echo "<h2>O segundo numero não pode ser: 0<h2>";
                        } else{
                           $result = $_POST['numero1'] / $_POST['numero2'];
                           echo "<h2>A divisão dos numeros é: $result<h2>";
                        }
                        break;
                }
            }


            ?>
        </div>
    </form>




</body>

</html>