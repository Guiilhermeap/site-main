<?php

if (isset($_POST['submit'])) {

  include_once('conexao.php');

  $CNPJemp = $_POST['cnpj'];
  $senhaemp = $_POST['senha'];
  $nomeemp = $_POST['nome'];
  $emailemp = $_POST['email'];
  $telefoneemp = $_POST['telefone'];
  $enderecoemp = $_POST['endereco'];
  $areatuacaoemp = $_POST['atuacao'];

  $result = mysqli_query($conexao, "INSERT INTO empresa(CNPJ,senha,nome,email,telefone,endereco,area_atuacao)
  VALUES ('$CNPJemp','$senhaemp','$nomeemp','$emailemp','$telefoneemp','$enderecoemp','$areatuacaoemp')");

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

    <form id="register-form" action="cad_empresa.php" method="post">

      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>

      <div class="full-box">
        <label for="name">Nome da Empresa</label>
        <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="40">
      </div>

      <div class="half-box spacing">
        <label for="cpf">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ " data-min-length="10" data-max-length="50" data-required>
      </div>

      <div class="half-box spacing">
        <label for="phone">Telefone</label>
        <input type="text" name="telefone" id="phone" placeholder="Digite o telefone" data-min-length="11" data-max-length="30" data-required>
      </div>

      <div class="half-box spacing">
        <label for="lastname">Area de Atuação</label>
        <input type="text" name="atuacao" id="atuacao" placeholder="Digite a Area de Atuação" data-min-length="10" data-max-length="50" data-required>
      </div>

      <div class="full-box">
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço" data-min-length="10" data-max-length="50" data-required>
      </div>

      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
      </div>

      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>

      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>

      <div>
        <a href="login_empresa.php">Já está cadastrado?
        </a></label>
      </div>

      <div class="full-box">
        <input type="submit" name="submit" id="submit" value="Cadastrar">
      </div>

    </form>
  </div>
  <p class="error-validation template"></p>

</body>

</html>