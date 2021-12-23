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
        function status_compra($a){

        switch ($a){
            case 1:
                $msg = "Aguardando pagamento";
                break;
            case 2:
                $msg = "Pago";
                break;
            case 3:
                $msg = "Em transporte";
                break;
            case 4:
                $msg = "Entregue";
                break;
        }
        return $msg;
    }

    echo "<table border='1'>
        <tr>            
            <td>Códido</td>
            <td>Status</td>
        </tr>";
        $codigo_pedido = 1;
        $retorno_funcao = status_compra($codigo_pedido);
    echo "<tr>
            <td>".$codigo_pedido."</td>
            <td>".$retorno_funcao."</td>
        </tr>
        </tr>";
        $codigo_pedido = 4;
        $retorno_funcao = status_compra($codigo_pedido);
    echo "<tr>
            <td>".$codigo_pedido."</td>
            <td>".$retorno_funcao."</td>
        </tr>";
        $codigo_pedido = 2;
        $retorno_funcao = status_compra($codigo_pedido);
    echo "<tr>
            <td>".$codigo_pedido."</td>
            <td>".$retorno_funcao."</td>
        </tr>";
        $codigo_pedido = 3;
        $retorno_funcao = status_compra($codigo_pedido);
    echo "<tr>
            <td>".$codigo_pedido."</td>
            <td>".$retorno_funcao."</td>
        </tr>"


    ?>
</body>
</html>