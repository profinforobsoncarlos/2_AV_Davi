<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor &#128178;</title>
</head>
<body>
    <div>
        <?php 
        $valor_real = $_GET["valor"];
        $dolar_hoje = 5.19;
        $valor_dolar = $valor_real/$dolar_hoje;  
        $e1 = number_format($valor_real, 2, ",", ".");    
        $e2 = number_format($valor_dolar, 2, ",", ".");
        $e3 = number_format($dolar_hoje, 2, ",", ".");
        echo "<h2>Você informou R$ $e1. <br/>Esse valor em Dólar é UU$ $e2.<br/>
        Cotação de hoje é R$  $e3.</h2>";
        $espaço = 0;
        while ($espaço <= 10) {/*Você criou um comando de repetição para um <br>? rsrsrs*/
           echo"<br/>";
           $espaço ++;
        };
        
        ?>
        <a href="index.html"><button>Voltar&#128178;</button></a>
    </div>
</body>
</html>