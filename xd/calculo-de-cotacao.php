<?php

    const DOLAR = 5.41;
    const EURO = 6.57;    
    $montante = $_GET["montante"]; 
    $moeda = $_GET["moeda"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-backend-a/sa01-rti-solutions/styles-global.css" />
    <title>Document</title>
</head>
<body >
    <form action="index.php" >
    <?php
        if($moeda == "dolar"){
            echo "Valor total em Dolar " . $montante * DOLAR;
        }
        else if($moeda == "euro"){
            echo "Valor total em Dolar " . $montante * EURO;
        }
        else if($moeda == null){
            echo "SELECIONA UMA MOEDA";
        }
    ?>
    <button>Voltar</button>
    </form>
</body>
</html>