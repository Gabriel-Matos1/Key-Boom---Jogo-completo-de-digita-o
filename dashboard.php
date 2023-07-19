<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
   
    <title>KEY-BOOM</title>
</head>

<body>
  <div class="borda">
    <div class="titulo"><img id="nome" src="arquivos/titulo.png"></div>
    <div class="molduraJogo">
   
        <h1 id="timer">01:00:00</h1>
          
    
    <div class="aparece" id="aparece">
    </div>
    <input type="text" id="entrada" class="campo">
    <div id="certo"></div>
    <div class="aparece" id="ATUAL">  </div>
    <button id="startButton" class="btn-dark" onclick="comecar(); aleatorio()">Iniciar</button>
  </div>
  <div class="botoes">
    <form action= "rankingtotal.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk"><B>Ranking</B></button>
    </form>
    <form action= "logout.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk">Sair</button>
    </form>
</div>
  </div>
  <div class="rodape"><p>Vítimas: Gabriel Matos, Nathaly Martins, Rafaella Nascimento e Vanessa Bughay</p></div>
  <script  src="jogo.js"></script>

</body>
</html>