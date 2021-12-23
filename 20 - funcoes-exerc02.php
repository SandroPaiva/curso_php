<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição For</title>
</head>
<body>
    <?php
        function qtd_container($a, $b){
            if ($a==$b){
                $msg = "Carregamento Concluido";
            }elseif($a<$b){
                $msg = "Carregamento excedido em ". $b-$a ." containers";
            }else{
                $msg = "Espaço disponivel para ". $a-$b ." containners";
            }
            return $msg;
            }

            echo "<table border='1'>
        <tr>            
            <td>Navio</td>
            <td>Capacidade</td>
            <td>Status</td>
        </tr>";
        $capacidade = 580;
        $carregado = 580;
        $status = qtd_container($capacidade, $carregado);
    echo "<tr>
            <td>HMM Algeciras</td>
            <td>".$capacidade."</td>
            <td>".$status."</td>
        </tr>";
        $capacidade = 580;
        $carregado = 600;
        $status = qtd_container($capacidade, $carregado);
    echo "<tr>
            <td>MSC Cargas</td>
            <td>".$capacidade."</td>
            <td>".$status."</td>
        </tr>";
        $capacidade = 580;
        $carregado = 579;
        $status = qtd_container($capacidade, $carregado);
    echo "<tr>
            <td>JJT Canárias</td>
            <td>".$capacidade."</td>
            <td>".$status."</td>
        </tr>";
        $capacidade = 580;
        $carregado = 200;
        $status = qtd_container($capacidade, $carregado);
    echo "<tr>
            <td>CARGO MUNDI</td>
            <td>".$capacidade."</td>
            <td>".$status."</td>
        </tr>
        </table>";

    ?>
</body>
</html>