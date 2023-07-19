<?php
session_start();
if (empty($_POST) or (empty($_POST["nick"]) or (empty($_POST["senha"]) or (empty($_POST["email"]) or (empty($_POST["confirma_senha"])))))){
    print "<script>alert('Por favor preencha todos os campos.')</script>"; 
    print "<script>location.href='cadastro.php';</script>";
    }

    include ('config.php');


$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$nick = mysqli_real_escape_string($conn, trim($_POST['nick']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
$confirma_senha = mysqli_real_escape_string($conn,$_POST["confirma_senha"]);

$sql = "select count(*) as total from login where email ='$email' ";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

if ($row['total']== 1){
    $_SESSION['email_existe']=true;
    print "<script>alert('Email ja utilizado! Favor selecionar outro.')</script>";
    print "<script>location.href='cadastro.php';</script>";
}

$sql = "select count(*) as total from login where nick ='$nick' ";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

if ($row['total']== 1){
    $_SESSION['usuario_existe']=true;
    print "<script>alert('Nome de usuário ja utilizado! Favor selecionar outro.')</script>";
    print "<script>location.href='cadastro.php';</script>";
}

if ($senha == $confirma_senha) {
    $senha = md5($senha);

$sql = "INSERT INTO login (email,nick,senha,dataincri,confirma_senha) 
VALUES ('$email','$nick','$senha',NOW(),'$confirma_senha')";

}
else {
    print "<script>alert('Senhas não conferem. Tente cadastro novamente')</script>";
    print "<script>location.href='cadastro.php';</script>";
  }

if ($conn->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
    print "<script>alert('Cadastro realizado com sucesso! Favor realizar login.')</script>";
}
$conn->close();

print "<script>location.href ='index.php';</script>";

?>
