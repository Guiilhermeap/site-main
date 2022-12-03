<?php
session_start();
include_once('conexao.php');

if (empty($_POST['emailAdm']) || empty($_POST['senhaAdm'])) {
    header('Location: login_adm.php');
    exit();
}

$emailadm = mysqli_real_escape_string($conexao, $_POST['emailAdm']);
$senhadm = mysqli_real_escape_string($conexao, $_POST['senhaAdm']);

$query = "SELECT email, senha FROM administrador WHERE email = '{$emailadm}' and senha = '{$senhadm}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['emailAdm'] = $emailadm;
    header('Location: timeline.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_adm.php');
    exit();
}