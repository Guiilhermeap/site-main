<?php

if (isset($_POST['submit'])) {

  include_once('conexao.php');

  $CPF = $_POST['cpf'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $cargo = $_POST['cargo'];

  $result = mysqli_query($conexao, "INSERT INTO administrador(CPF,senha,nome,email,telefone,endereco,cargo)
  VALUES ('$CPF','$senha','$nome','$email','$telefone','$endereco','$cargo')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div id="main-container">
    <h4> FATEC ITAQUAQUECETUBA </h4>
    <h1>Cadastre-se para acessar o sistema</h1>

    <form id="register-form" action="cad_adm.php" method="POST">

      <div class="full-box">
        <label for="email">E-mail</label>
        <input class="site" type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>

      <div class="full-box">
        <label for="name">Nome Completo</label>
        <input class="site" type="text" name="nome" id="name" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="40">
      </div>

      <div class="half-box spacing">
        <label for="cpf">CPF</label>
        <input class="site" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" data-min-length="11" data-max-length="11" data-required>
      </div>

      <div class="half-box spacing">
        <label for="phone">Telefone</label>
        <input class="site" type="text" name="telefone" id="phone" placeholder="Digite seu telefone com DDD" data-min-length="11" data-max-length="11" data-required>
      </div>

      <div class="full-box">
        <label for="endereco">Endereco</label>
        <input class="site" type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço" data-min-length="11" data-max-length="11" data-required>
      </div>

      <div class="full-box">
        <label for="endereco">Cargo</label>
        <input class="site" type="text" name="cargo" id="cargo" placeholder="Digite seu Cargo" data-min-length="11" data-max-length="11" data-required>
      </div>

      <br><br><br>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input class="site"  type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>

      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input class="site" type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>

      <div>
        <input class="site" type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>

      <div>
        <a href="login_adm.php">Já está cadastrado?
        </a></label>
      </div>

      <div class="full-box">
        <input class="site" type="submit" name="submit" id="submit">
      </div>

    </form>
  </div>
  <p class="error-validation template"></p>

</body>

</html>