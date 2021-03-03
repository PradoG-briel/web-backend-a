<?php

    const VALOR_PEDAGIO = 9.4;
    const VALOR_KM = 6;

    $origem = $_GET["origem"];
    $destino = $_GET["destino"];
    $distancia = $_GET["distancia"];
    $pedagios = $_GET["pedagios"];

    $custoPedagio = $pedagios * VALOR_PEDAGIO;
    $custokm = $distancia * VALOR_KM;

    $custoViagem = $custokm + $custoPedagio;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css"/>
    <title>Document</title>
</head>
<body>
    <?php
        echo ($custoPedagio > 100) ? "<h1 style='color: red'> O valor total dos pedagios é: $custoPedagio</h1>" : 
        "<h1>O valor total dos pedagios é de: $custoPedagio </h1>";
    ?>
    <h1>A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$<em><?= number_format($custoViagem,2,",",".") ?></em> </h1>
</body>
</html>