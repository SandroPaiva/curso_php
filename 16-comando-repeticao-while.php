<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição While</title>
</head>
<body>
    <?php

    $a = 1;
    
    while($a <= 200){
        echo "Produto verificado!<br>";
        $a+=$a;
        echo "<br>Valor de $a<br>";
    }

    ?>
</body>
</html>