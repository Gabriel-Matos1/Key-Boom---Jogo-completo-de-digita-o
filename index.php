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
    <div class="icone">
<img src="arquivos/bomba_icone.gif">
    </div>
    <form action= "login.php" class="login" id="formulario" method="POST">
		<h1>Login</h1>
        <p>Nome de usuário <br>
        <input class="campo" name="nick" id="nick" type="text"></p>
        <p>Senha<br>
        <input class="campo" name="senha" id="senha" type="password"></p>
        <input type="submit" class="btn btn-dark " id="login" value="login">
    </form>
	<div class="registrar">
        <p>Primeiro acesso? <a href='cadastro.php'>Cadastre-se</a></p>
    </div>
    
    </div>
    <div class="rodape"><p>Vítimas: Gabriel Matos, Nathaly Martins, Rafaella Nascimento e Vanessa Bughay</p></div>


</body>
</html>