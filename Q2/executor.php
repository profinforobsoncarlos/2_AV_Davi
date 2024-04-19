<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de faixa etária</title>
</head>
<body>
    <div>
        <?php 
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $atual = 2024;
        $c_ano= $atual - $ano;
        if ($c_ano>=1 && $c_ano<=11) {
            $estado = "Criança";}
            elseif ($c_ano>11 && $c_ano<=14) {
                $estado = "Adolescente";}
                elseif ($c_ano>14 && $c_ano<=18) {
                    $estado = "Jovem";}
                    elseif ($c_ano>18 && $c_ano<=64) {
                        $estado = "Adulto";}
                        else {
                            $estado = "Idoso";
                        }
        echo "<h2>Você nasceu em $ano, portanto você é um(a) $estado.</h2>";

        $espaço = 0;
        while ($espaço <= 10) {
           echo"<br/>";
           $espaço ++;
        };
        
        ?>
        <a href="index.html"><button>Voltar</button></a>
    </div>
</body>
</html>