<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador de Comparação</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 8;

    if ($a == $b){
        echo "O numero $a é igual a $b <br>";
    }else{
        echo "O numero $a é diferente de $b<br>";
    }

    if ($a != $b){
        echo "O numero $a é diferente de $b<br>";
    }else{
        echo "O numero $a é igual a $b<br>";
    }

    if ($a < $b){
        echo "O numero $a é menor que $b<br>";
    }elseif($a==$b){
        echo "O numero $a é igual a $b<br>";
    }else{
        echo "O numero $a é maior que $b<br>";
    }

    if ($a >= $b){
        echo "O numero $a maior ou igual a $b<br>";
    }else{
        echo "O numero $a é menor ou igual a $b<br>";
    }

    if ($a <= $b){
        echo "O numero $a é menor ou igual a $b<br>";
    }else{
        echo "O numero $a maior ou igual a $b<br>";
    }


    ?>
</body>
</html>