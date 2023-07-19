<?php
session_start();
if (empty($_POST) or (empty($_POST["nick"]) or (empty($_POST["senha"])))){
print "<script>location.href='index.php';</script>"; 
}

include ('config.php');

$nick=$_POST["nick"];
$_SESSION['nick']=$nick;
$senha=$_POST["senha"];
$senha = md5($senha);


$sql = "SELECT * FROM login
WHERE nick =  '{$nick}'
AND senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row =  $res->fetch_object();
$qtd = $res->num_rows;

if($qtd>0){
$_SESSION['nick']= $nick;
print "<script>location.href ='dashboard.php';</script>";
} else {
  print "<script>alert('Nickname e/ou Senha Incorreto(s)')</script>";
  print "<script>location.href ='index.php';</script>";
}

?>