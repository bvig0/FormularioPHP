<?php
session_start();
$_SESSION['nome2'] = $_POST['nome'];
$_SESSION['idade2'] = $_POST['idade'];
$_SESSION['peso2'] = $_POST['peso'];
$_SESSION['altura2'] = $_POST['altura'];

$alto = "";
$velho = "";
$pesado = "";

if($_SESSION['altura1'] > $_SESSION['altura2']){
    $alto = $_SESSION['nome1'];
}
else{
    $alto = $_SESSION['nome2'];
}

if($_SESSION['idade1'] > $_SESSION['idade2']){
    $velho = $_SESSION['nome1'];
}
else{
    $velho = $_SESSION['nome2'];
}

if($_SESSION['peso1'] > $_SESSION['peso2']){
    $pesado = $_SESSION['nome1'];
}
else{
    $pesado = $_SESSION['nome2'];
}

echo("O mais alto é: $alto <br/>
O mais velho é: $velho <br/>
O mais pesado é: $pesado <br/>");
echo('<a href="../index.php">Voltar</a>"');

session_destroy();
?>

