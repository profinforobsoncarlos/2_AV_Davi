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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
      if ($media>=7) {$s = "Aprovado";
      }
      elseif ($media<=4.99) {$s = "Reprovado";
      }
      else {
        $s="Recuperação";
      }
        echo "<h2>Sua nota é $media, portanto seu estado é: $s</h2>";

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