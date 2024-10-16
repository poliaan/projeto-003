<?php

include('../includes/header.php');

echo "<br>";

echo "<h2>Exemplo de utilização de IF / ELSE</h2>";

echo "<hr><br>";

echo '<a href="index.php"><button>VOLTAR</button></a>';

echo "<br><br>";

$number = $_POST['numero'];

if ($number % 2 == 0) {
    echo "{$number} é PAR";
} else{
    echo "{$number} é IMPAR";
}

include('../includes/footer.php');
?>

<html>

<style>

        a button{
        width: 100px;
        height: 30px;
        font-size: 16px;
        background-color: #e8a3b6;
        border-radius: 8px;
        transition: 0.4s;
        }

        a button:hover{
        transition: 0.4s;
        background-color: #f2f6c3;
        }

    </style>

</html>