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
    function custo_irrigacao(&$s, &$v, &$f){
        for ($i=1; $i<=15; $i++){
            if ($i<=12 and $i%3 !=0){
                $custo_m3 = $v * $s;
                $custo_hect = $custo_m3 * $f;
                $custo_irriga = $custo_hect + 1000;
            echo "<tr> <td>". $s ."m³ </td>
                <td>R$ ". number_format($custo_irriga,2,",",".") ."</td>
                <td></td><td></td> </tr>";
            }elseif($i<=12 and $i%3 ==0){
                $custo_m3 = $v * $s;
                $custo_hect = $custo_m3 * $f;
                $custo_irriga = $custo_hect + 1000;
            echo "<tr> <td>". $s ."m³ </td>
                <td>R$ ". number_format($custo_irriga,2,",",".") ."</td>
                <td>". $s*3 ."m³</td> <td>R$ ". number_format($custo_irriga*3,2,",",".") ."</td> </tr>";
                     
            }elseif($i>12 and $i%3 !=0) {
                $custo_m3 = $v * $s;
                $custo_hect = $custo_m3 * $f;

                echo "<tr><td>". $s ."m³</td>
                <td>R$ ". number_format($custo_hect,2,",",".") ."</td>
                <td></td><td></td> </tr>";
            }else{
                $custo_m3 = $v * $s;
                $custo_hect = $custo_m3 * $f;

                echo "<tr><td>". $s ."m³</td>
                <td>R$ ". number_format($custo_hect,2,",",".") ."</td>
                <td>". $s*3 ."m³</td><td>R$ ". number_format($custo_hect*3,2,",",".") ."</td> </tr>";
            }
        }
        echo "<tr><td><strong>Total m³</strong></td>
                <td><strong>Custo Total <br> em 5 anos</strong></td>
                <td></td><td></td> </tr>
                <tr><td>". $s*15 ."m³</td>
                <td>R$ ". number_format($custo_hect*3+($custo_irriga*12),2,",",".") ."</td>
                <td></td><td></td> </tr>";
    }



    $safra_m3 = 5267;
    $val_hect = 0.17;
    $hect_fazenda = 1287;
    ?>
   <table border="1">
        <tr>
            <td>
                M³ por safra
            </td>
            <td>
                Custo com irrigação<br> (primeiras 12 safras)
            </td>
            <td>
                M³ gastos por ano
            </td>
            <td>
                Custo por ano
            </td>
        </tr>
        <?php $custo_fazenda = custo_irrigacao($safra_m3, $val_hect, $hect_fazenda) ?>
    </table>



       


    
</body>
</html>