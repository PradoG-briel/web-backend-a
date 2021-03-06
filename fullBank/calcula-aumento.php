<?php

    const MAIOR_5K = 0.10;
    const MENOR_5K = 0.20;
    
    $salarioAtual = $_GET["salarioAtual"];
    $nome = $_GET["nome"];

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
       if($salarioAtual > 5000){
        echo "O salario de $nome, passara a ser de " . $salarioAtual * MAIOR_5K + $salarioAtual;
    }
    else if($salarioAtual <= 5000){
        echo "O salario de $nome, passara a ser de " . $salarioAtual * MENOR_5K + $salarioAtual;
    }
    else if($result < 0){
        echo $result = "Salario Invalido";
    }
    ?>
    <button>Voltar</button>
    </form>
</body>
</html>