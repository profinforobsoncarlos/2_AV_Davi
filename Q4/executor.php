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
        $data = $_GET["data"];
        $profissao = $_GET["profissao"];
        $ano_atual = 2024;
        $idade = date('Y',strtotime($data));
        $ano_calculo = $ano_atual - $idade;
        echo "<h2> Você se chama $nome, nasceu em $data, portanto tem $ano_calculo anos, e é um $profissao ";
        

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