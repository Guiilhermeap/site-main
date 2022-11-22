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
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_empresa.php');
    exit();
}


    // session_start();
    // // print_r($_REQUEST);
    // if(isset($_POST['submit']) && !empty($_POST['loginCnpj']) && !empty($_POST['senhaEmp']))
    // {
    //     // Acessa
    //     $cnpj = $_POST['loginCnpj'];
    //     $senha = $_POST['senhaEmp'];

    //     // print_r('Email: ' . $email);
    //     // print_r('<br>');
    //     // print_r('Senha: ' . $senha);

    //     $sql = "SELECT * FROM empresa WHERE CNPJ = '$cnpj' and senha = '$senha'";

    //     $result = $conexao->query($sql);

    //     print_r($sql);
    //     print_r($result);

    //     // if(mysqli_num_rows($result) < 1)
    //     // {
    //     //     unset($_SESSION['loginCnpj']);
    //     //     unset($_SESSION['senhaEmp']);
    //     //     header('Location: login_empresa.php');
    //     // }
    //     // else
    //     // {
    //     //     $_SESSION['loginCnpj'] = $cnpj;
    //     //     $_SESSION['senhaEmp'] = $senha;
    //     //     header('Location: painel.php');
    //     // }
    // }
    // else
    // {
    //     // Não acessa
    //     header('Location: login_empresa.php');
    // }
