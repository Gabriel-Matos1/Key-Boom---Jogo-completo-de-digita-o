<?php
session_start();
?>


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
<body class="borda">
<form  action='cadastrar.php' method="POST">
    <div class="titulo"><img id="nome" src="arquivos/titulo.png"></div>
    <div class="icone">
        <img src="arquivos/bomba_icone.gif">
    </div>

    <div class="cadastro">
       <h1>Cadastro</h1>
        <p>E-mail <br> <input class="campo" name="email" id="email" type="email"> </p>
        <p></p>
        <p>Nickname <br>
        <input class="campo" name="nick" id="nick" type="text"></p>
        <p>Senha<br>
        <input class="campo" name="senha" id="senha" type="password"></p>
        <p>Confirmar senha <br>
        <input class="campo" name="confirma_senha" id="confirma_senha" type="password"></p>

        <input type="submit" class="btn btn-dark " id="cadastrar" value="Cadastrar">
    </div>
    <div class="rodape"><p>Vítimas: Gabriel Matos, Nathaly Martins, Rafaella Nascimento e Vanessa Bughay</p></div>
</body>
</html>

