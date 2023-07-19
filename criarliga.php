<?php
session_start();
if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["senha"]) or (empty($_POST["confirma_senha"]))))){
    print "<script>alert('Por favor preencha todos os campos.')</script>"; 
    print "<script>location.href='crialiga.php';</script>";
    }

    include ('config.php');


$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
$confirma_senha = mysqli_real_escape_string($conn,$_POST["confirma_senha"]);

$sql = "select count(*) as total from ligas where nome  ='$nome' ";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

if ($row['total']== 1){
    $_SESSION['liga_existe']=true;
    print "<script>alert('Liga ja existente! Favor selecionar outro nome.')</script>";
    print "<script>location.href='crialiga.php';</script>";
    $error=true;
}


if ($senha == $confirma_senha) {
    $senha = md5($senha);

$sql = "INSERT INTO ligas (nome,senha,confirma_senha) 
VALUES ('$nome','$senha','$confirma_senha')";
}
else {
    print "<script>alert('Senhas não conferem. Tente criar liga novamente')</script>";
    print "<script>location.href='crialiga.php';</script>";
  }

if ($conn->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
    print "<script>alert('Liga criada com sucesso!. Favor realize login na sua liga')</script>";
}
$conn->close();

print "<script>location.href ='entraliga.php';</script>";

?>
