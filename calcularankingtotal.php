<?php
session_start();

include ('config.php');

$nickpont=$_SESSION['nick'];
$pont=mysqli_real_escape_string($conn, trim($_POST['resultado']));

$sql = "INSERT INTO pontuacao (nick,pont,dia) 
VALUES ('$nickpont','$pont',NOW())";
if (mysqli_query($conn, $sql)) {
    print "<script>alert('Continua....')</script>";
} else {
    print "<script>alert('ERRO NO JOGO')</script>";
}


print "<script>location.href='rankingtotal.php';</script>";

?>
