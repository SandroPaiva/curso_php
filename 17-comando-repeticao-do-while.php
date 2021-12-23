<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição Do While</title>
</head>
<body>
    <?php

    $a = 1;
    
    do{
        echo "E-mail enviado: $a <br>";
        $a++;
    }while($a <= 10);

    ?>
</body>
</html>