<?php
session_start();
include_once('conexao.php');

if (empty($_POST['emailAlu']) || empty($_POST['senhaAlu'])) {
    header('Location: login_aluno.php');
    exit();
}

$emailaluno = mysqli_real_escape_string($conexao, $_POST['emailAlu']);
$senhaaluno = mysqli_real_escape_string($conexao, $_POST['senhaAlu']);

$query = "SELECT email, senha FROM aluno WHERE email = '{$emailaluno}' and senha = '{$senhaaluno}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['emailAlu'] = $emailaluno;
    header('Location: AreaAluno.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_aluno.php');
    exit();
}