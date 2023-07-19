<?php
session_start();

if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["senha"])))){
print "<script>location.href='entraliga.php';</script>"; 
}
$nick=$_SESSION['nick'];

include ('config.php');

$nome=$_POST["nome"];
$_SESSION['liga']=$nome;
$senha=$_POST["senha"];
$senha = md5($senha);

$sql = "SELECT * FROM ligas
WHERE nome =  '{$nome}'
AND senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row =  $res->fetch_object();
$qtd = $res->num_rows;

if($qtd>0){
$sql = "UPDATE login SET nome='$nome' WHERE nick='$nick' ";
if (mysqli_query($conn, $sql)) {
  print "<script>alert('Cadastrado na liga com sucesso!')</script>";
} else {
  print "<script>alert('Favor tentar novamente. mysqli_error($conn)')</script>"; 
}
print "<script>location.href ='rankingtotal.php';</script>";
} 
else {
  print "<script>alert('Nome e/ou Senha Incorreto(s)')</script>";
  print "<script>location.href ='entraliga.php';</script>";
}



?>