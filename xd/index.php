<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-backend-a/sa01-rti-solutions/styles-global.css" />
    <title>Document</title>
</head>

<body>
    <form method="GET" action="calculo-de-cotacao.php">
        <h1>Calculo de Cotação</h1>
        <div class="imput-group">
            <label for="montante">Seu montante</label>
            <input type="number" id="montante" name="montante"/>
        </div>
        <div>
            <input type="radio" id="EURO" name="moeda" value="euro"/>
            <label for="EURO">EURO</label>
        </div>
        <div>
            <input type="radio" id="DOLAR" name ="moeda" value="dolar"/>
            <label for="DOLAR">DOLAR</label>
        </div>
        <button>Calcular</button>
    </form>
</body>

</html>