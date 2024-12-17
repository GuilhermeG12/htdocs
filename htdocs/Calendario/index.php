<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
function linha($semana)
{
echo "<tr>";
for ($i = 0; $i <= 6; $i++) {
if (isset($semana[$i])) {
echo "<td>{$semana[$i]}</td>";
} else {
echo "<td></td>";
}
}
echo "</tr>";
}
?>

<?php
function calendario()
{
$dia = 1;
$semana = array();
while ($dia <= 31) {
array_push($semana, $dia);
if (count($semana) == 7) {
linha($semana);
$semana = array();
}
$dia++;
}
linha($semana);
}
?>



    <form action="index.php" method="get">
        <div class="container">
            <h1>Calendario:</h1><br><br>
            <table class="calendar" border="1">
                <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>

                </tr>
                
<?php calendario(); ?>
            </table>
            <br><br><br>




        </div>
    </form>




</body>

</html>