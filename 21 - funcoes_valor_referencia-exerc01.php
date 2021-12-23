<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parametros por valor e referencia</title>
</head>
<body>
    <?php
        echo "<h4>Passagem por referencia</h4>";

        function custo_prod(&$custo){
            $custo += $custo*0.7;
            /*echo "Dentro da função - salario com aumento: $num <br>";*/

        }

        $valor_custo = 3200;
        echo "Valor do custo: $valor_custo <br>";
        custo_prod($valor_custo);
        echo "Valor do custo com lucro de 70%: $valor_custo <br>";


    ?>
</body>
</html>