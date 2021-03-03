<?php

    const MAIOR_5K = 0.1;
    const MENOR_5K = 0.20;

    $nome = $_GET["nome"];
    $salarioAtual = $_GET["salarioAtual"];

    if($salarioAtual > 5000){
        echo $salarioAtual * MAIOR_5K;
    }
    else if($salarioAtual <= 5000){
        echo $salarioAtual * MENOR_5K;
    }
    else{
        echo "Salario Invalido";
    }


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
       
    ?>
    
</body>
</html>