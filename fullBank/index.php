<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>

<body>
    <form method="GET" action="calcula-aumento.php">
        <h1>Calculo de Aumento</h1>
        <div class="imput-group">
            <label for="nome">Seu nome</label>
            <input type="text" id="nome" name="nome" />
        </div>
        <div class="imput-group">
            <label for="salarioAtual">Seu Salario Atual</label>
            <input type="number" id="salarioAtual" name="salarioAtual" />
        </div>
        <button>calcular</button>
    </form>
</body>

</html>