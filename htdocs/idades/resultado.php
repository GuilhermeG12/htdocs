<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

        <div class="container">

            <h1>Resultado:</h1>
    
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $idades =[
                        $_POST['idade1'],$_POST['idade2'],$_POST['idade3'],
                        $_POST['idade4'],$_POST['idade5'],$_POST['idade6'],
                        $_POST['idade7'],$_POST['idade8'],$_POST['idade9'],
                        $_POST['idade10']];    
            
                        $menornum= min($idades);
                        $maiornum= max($idades);


                echo "<h2>A Maior idade é: $maiornum <br>";
                echo "A Menor idade é: $menornum </h2><br>";
               
                }
                
                ?>
            
        </div>
   



</body>

</html>