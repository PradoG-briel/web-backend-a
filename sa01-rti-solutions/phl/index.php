<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css"/>
  <title>Document</title>
</head>
<body>
<form method="GET" action="calcula-frete.php">
<h1>Calcula Frete</h1>
  <div class="imput-group">
    <label for="origem">Cidade de Origem</label>
    <input type="text" id="origem" name="origem"/>
  </div>
  <div class="imput-group">
    <label for="destino">Cidade de Destino</label>
    <input type="text" id="destino" name="destino"/>
  </div>
  <div class="imput-group">
    <label for="distancia">Distancia em Km</label>
    <input type="number" id="distancia" name="distancia"/>
  </div>
  <div class="imput-group">
    <label for="pedagios">pedagios</label>
    <input type="number" id="pedagios" name="pedagios"/>
  </div>
  <button>Calcular</button>
  <button type="reset">Limpar</button>
</form>
</body>
</html>