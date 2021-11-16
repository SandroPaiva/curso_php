<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php

    $a = 4;

    switch($a){
        case 1:
            echo "Sacar Dinheiro!";
        break;

        case 2:
            echo "Depositar Dinheiro!";
        break;

        case 3:
            echo "Imprimir cheque!";
        break;

        default:
            echo "Opção não encontrada";
        break;
    }

    ?>
</body>
</html>