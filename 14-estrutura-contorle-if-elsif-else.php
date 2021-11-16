<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle - IF - ELSIF - ELSE</title>
</head>
<body>
    <?php

    $a = 4;

    if($a == 2){
        echo "Depositar Dinheiro!";
    }elseif($a == 1){
        echo "Sacar Dinheiro!";
    }elseif($a==3){
        echo "Extrato Conta corrente!";
    }else{
        echo "Opção não encontrada!";
    }

    ?>
</body>
</html>