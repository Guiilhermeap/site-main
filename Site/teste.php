<?php

if (isset($_POST['submit'])) {

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];


    $result = mysqli_query($conexao, "INSERT INTO teste (nome, email) VALUES ('$nome','$email')");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="teste.php" method="POST">
        <div class="full-box">
            <label for="email">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" data-min-length="2">
        </div>

        <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>

        <div class="full-box">
            <input type="submit" nome="submit" id="submit">
        </div>
    </form>
</body>

</html>