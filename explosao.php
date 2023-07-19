<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEY-BOOM</title>
    <script src="aguardar.js"> </script>
</head>
    <body class="explosao">
        <div class="video-background">
            <video autoplay muted>
              <source src="arquivos/explosao.mp4" type="video/mp4">
            </video>
          </div>
        <div class="bordaFim" id="bordaFim">
         <form  action='calcularankingtotal.php' method="POST">
            <input name="resultado" id="inp" class="resultado">
            <div id="AparecePontFinal" ></div>
            <button type=submit id="btn" class="btn btn-dark btn-lg">Próximo</button>
        </div>
        <script src="explosao.js"></script>
        </form>
  </body>
</html>