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
<h1>Aluno(a): <?php echo $_POST["nome"]?> </h1><br>
<p>Primeiro Número da NOTA é: <?php echo $_POST["numero1"]?></p>
<p>Segundo Número da NOTA é: <?php echo $_POST["numero2"]?></p>
<p>Terceiro Número da NOTA é: <?php echo $_POST["numero3"]?></p>
<p>Quarto Número da NOTA é: <?php echo $_POST["numero4"]?></p><br>


<h2>A media dos numeros são: <?php 

$num1 = $_POST["numero1"]; 
$num2 = $_POST["numero2"]; 
$num3 = $_POST["numero3"]; 
$num4 = $_POST["numero4"]; 

$media = $num1 + $num2 + $num3 + $num4;

$mult = 4;


$resul = $media / $mult;

echo $resul;
 ?><br><br><br>

<a href="index.php"><input type="button" id="botao" value="VOLTAR"></a>

</h1> 
</div>

</body>
</html>