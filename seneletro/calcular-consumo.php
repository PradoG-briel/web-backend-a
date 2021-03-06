<?php
 
    $endereco = $_GET["endereco"];
    $numero = $_GET["numero"];
    $consumo = $_GET["consumo"];
    $total = $_GET["total-a-pagar"];
    $titular = $_GET["titular"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-backend-a/sa01-rti-solutions/styles-global.css" />
    <title>Document</title>
</head>
<body>
    <form action="index.php">
    <?php
        if($consumo > 120){
            echo "<h1>Conta de luz de $titular.</h1>";
            echo "<p>$endereco, $numero</p>";
            echo "<p style='color: red'> O seu consumo é: $consumo kWh.</p>";
            echo "Total a pagar é de: " . $consumo * 0.42;
        }
        else if($consumo <= 120){
            echo "<h1>Conta de luz de $titular.</h1>";
            echo "<p>$endereco, $numero</p>";
            echo "<p style='color: blue'> O seu consumo é: $consumo. Obrigado por economizar. kWh.</p>";
            echo "Total a pagar é de: " . $consumo * 0.32;
        }
    ?>
    <button>Voltar</button>
    </form>
</body>
</html>