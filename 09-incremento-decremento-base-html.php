<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inceremento Decremento</title>
</head>
<body>
    <?php

    echo "<h3>Pós-incremento</h3>";
    $a = 5;
    echo "Valor inicial da variável: ". $a ."<br>";
    echo "Valor usando o <b>Pós-incremento</b>: ". $a++ ."<br>";
    echo "Valor da variável: $a <br><br>";

    echo "<h3>Pré-incremento</h3>";
    $a = 5;
    echo "Valor inicial da variável: $a <br>";
    echo "Valor usando o <b>Pré-incremento</b>: ". ++$a ."<br>";
    echo "Valor da variável: ". $a ."<br><br>";

    echo "<h3>Pós-decremento</h3>";
    $a = 5;
    echo "Valor iniciaal da variável: ". $a ."<br>";
    echo "Valor usando o <b>Pós-decremento</b>: ". $a-- ."<br>";
    echo "Valor da variável: $a <br><br>";

    echo "<h3>Pré-decremento</h3>";
    $a = 5;
    echo "Valor inicial da variável: $a <br>";
    echo "Valor usando o <b>Pré-decremento</b>: ". --$a ."<br>";
    echo "Valor da variável: $a <br><br>";


    ?>
    
</body>
</html>