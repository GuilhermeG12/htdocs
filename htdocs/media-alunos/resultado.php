<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

        <div class="container">

            <h1>Resultados:</h1>
    
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $notas = array (
                        array($_POST['nota1'],$_POST['nota2'],$_POST['nota3']),
                        array($_POST['nota4'],$_POST['nota5'],$_POST['nota6']),
                        array($_POST['nota7'],$_POST['nota8'],$_POST['nota9'])
                      );
               $medias = [($notas[0][0] + $notas[0][1] + $notas[0][2]) / 3,($notas[1][0] + $notas[1][1] + $notas[1][2]) / 3 ,($notas[2][0] + $notas[2][1] + $notas[2][2]) /3];
                
                echo "<h2>A média do aluno 1 é: $medias[0] <br>";
                echo "A média do aluno 2 é: $medias[1] <br>";
                echo "A média do aluno 3 é: $medias[2] </h2>";
                }
                
                ?>
            
        </div>
   



</body>

</html>