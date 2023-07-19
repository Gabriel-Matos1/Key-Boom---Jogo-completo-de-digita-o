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
        <div class=" rank historico">
            <p>Histórico de pontuação</p>
            <div class="tabela pontHist"><?php
session_start();

include ('config.php');

$nome=$_SESSION['nick'];
$query ="SELECT login.nick,pontuacao.pont,pontuacao.dia
FROM login,pontuacao where pontuacao.nick='$nome' and login.nick='$nome' order by pontuacao.dia desc";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nick</th><th>Pontuação</th><th>Data</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nick'] . "</td>";
        echo "<td>" . $row['pont'] . "</td>";
        echo "<td>" . $row['dia'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Sem  dados.";
}

mysqli_free_result($result);
?></div>
       </div>

        <div class="rank rGeralsemana">
            <p>Ranking Geral Semanal</p>
           <div class="tabela geralSemana"><?php
$query = $query = "SELECT p.dia, p.nick, p.pont AS pont FROM pontuacao p
INNER JOIN (
    SELECT nick, MAX(pont) AS max_pont
    FROM pontuacao
    WHERE dia >= DATE_SUB(NOW(), INTERVAL 7 DAY)
    GROUP BY nick
) m ON p.nick = m.nick AND p.pont = m.max_pont
ORDER BY pont DESC";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nick</th><th>Pontuação</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nick'] . "</td>";
        echo "<td>" . $row['pont'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Sem  dados.";
}

?>
     
      </div>
</div>
<div class="rank rGeralSempre">
    <p>Ranking Geral</p>
   <div class="tabela geralSempre"><?php
$query = "SELECT nick, MAX(pont) AS pont FROM pontuacao GROUP BY nick ORDER BY pont DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nick</th><th>Pontuação</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nick'] . "</td>";
        echo "<td>" . $row['pont'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Sem  dados.";
}

mysqli_free_result($result);
?></div>
    </div>
    <div class="rank rLigaSemana">
        <p>Ranking na Liga Semanal</p>
        <div class="tabela ligaSemana"><?php

$nick=$_SESSION['nick'];
$sql ="SELECT nome from login where nick='$nick'";
$resultado = mysqli_query($conn,$sql);
$liga=mysqli_fetch_assoc($resultado);
$nome=$liga['nome'];

$query = "SELECT p.dia, l.nome, p.nick, p.pont
          FROM (
            SELECT pontuacao.nick, MAX(pontuacao.pont) AS pont
            FROM login, ligas, pontuacao
            WHERE '$nome' = login.nome
            AND pontuacao.nick = login.nick
            AND pontuacao.dia >= DATE_SUB(NOW(), INTERVAL 7 DAY)
            GROUP BY pontuacao.nick
          ) AS m
          JOIN pontuacao AS p ON m.nick = p.nick AND m.pont = p.pont
          JOIN login AS l ON m.nick = l.nick
          ORDER BY m.pont DESC";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nick</th><th>Pontuação</th><th>Liga</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nick'] . "</td>";
        echo "<td>" . $row['pont'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Sem  dados.";
}

?>
</div>
    </div>
    <div class="rank rLigaSempre">
        <p>Ranking na Liga</p>
        <div class="tabela ligaSempre"><?php

$nick=$_SESSION['nick'];
$sql ="SELECT nome from login where nick='$nick'";
$resultado = mysqli_query($conn,$sql);
$liga=mysqli_fetch_assoc($resultado);
$nome=$liga['nome'];

$query ="SELECT login.nome, login.nick, MAX(pontuacao.pont) AS pont
FROM login
JOIN ligas ON '$nome' = login.nome
JOIN pontuacao ON pontuacao.nick = login.nick
GROUP BY login.nick
ORDER BY pont DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nick</th><th>Pontuação</th><th>Liga</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nick'] . "</td>";
        echo "<td>" . $row['pont'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Sem  dados.";
}

?></div>
    </div>
   
   

<div class="botoes">
    <form action= "dashboard.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk"><B>NOVO JOGO</B></button>
    </form>
    <form action= "crialiga.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk">Criar liga</button>
    </form>
    <form action= "entraliga.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk">Entrar liga</button>
    </form>
    <form action= "logout.php" id="formulario" method="POST">
        <button type="submit" class="btn btn-dark  btn-rk">Sair</button>
    </form>
</div>
</div>

    <div class="rodape"><p>Vítimas: Gabriel Matos, Nathaly Martins, Rafaella Nascimento e Vanessa Bughay</p></div>

</body>
</html>