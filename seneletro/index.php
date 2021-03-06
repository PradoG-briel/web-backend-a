<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-backend-a/sa01-rti-solutions/styles-global.css" />
    <title>Calculo de kWh</title>
</head>

<body>
    <form method="GET" action="calcular-consumo.php">
        <h1>Calculo de kWh</h1>
        <div class="imput-group">
            <label for="endereco">Seu endereço:</label>
            <input type="text" id="endereco" name="endereco"/>
            <label for="numero">Numero:</label> 
            <input type="number" id="numero" name="numero"/>
        </div>
        <div>
            <label for="titular">Titular:</label>
            <input type="text" id="titular" name="titular"/>
            <label for="consumo">Consumo:</label>
            <input type="number" id="consumo" name="consumo"/>
        </div>
        <button>Calcular</button>
    </form>
</body>

</html>