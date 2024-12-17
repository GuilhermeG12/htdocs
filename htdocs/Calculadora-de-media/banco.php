<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calculadora";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

    $nome = $_POST["nome"];
    $nota1 = $_POST["numero1"];
    $nota2 = $_POST["numero2"];
    $nota3 = $_POST["numero3"];
    $nota4 = $_POST["numero4"];

    $sql = "INSERT INTO `aluno-a` (Nome, num1, num2, num3, num4)
            VALUES ('$nome', $nota1, $nota2, $nota3, $nota4)";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
    } 

?>
