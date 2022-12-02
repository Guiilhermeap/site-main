<?php
session_start();
include_once('conexao.php');

if (empty($_POST['cnpjEmp']) || empty($_POST['senhaEmp'])) {
    header('Location: login_empresa.php');
    exit();
}

$cnpjemp = mysqli_real_escape_string($conexao, $_POST['cnpjEmp']);
$senhaemp = mysqli_real_escape_string($conexao, $_POST['senhaEmp']);

$query = "SELECT cnpj, senha FROM empresa WHERE cnpj = '{$cnpjemp}' and senha = '{$senhaemp}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['cnpjEmp'] = $cnpjemp;
    header('Location: Area_empresa.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_empresa.php');
    exit();
}