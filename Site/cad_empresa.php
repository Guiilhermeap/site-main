<?php

if (isset($_POST['submit'])) {

  include_once('conexao.php');

  $CNPJ = $_POST['cnpj'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $areatuacao = $_POST['atuacao'];

  $result = mysqli_query($conexao, "INSERT INTO aluno (CNPJ,senha,nome,email,telefone,endereco,area_atuacao)
  VALUES ('$CNPJ','$senha','$nome','$email','$telefone','$endereco','$areatuacao')");

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
    <h1>Cadastre sua empresa</h1>

    <form id="register-form" action="cad_empresa.php" method="POST">

      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>

      <div class="full-box">
        <label for="name">Nome da Empresa</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome da empresa" data-required data-min-length="3" data-max-length="30">
      </div>

      <div class="half-box spacing">
        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" placeholder="Digite o cnpj" data-required data-only-numbers>
      </div>

      <div class="half-box spacing">
        <label for="atuacao">Ârea de atuação</label>
        <input type="text" name="atuacao" id="atuacao" placeholder="Digite a ârea de atuação" data-required data-only-numbers>
      </div>

      <div class="half-box spacing">
        <label for="telefone">Tel</label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone" data-required data-only-numbers>
      </div>

      <div class="full-box">
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço" data-min-length="11" data-max-length="11" data-required>
      </div>

      <div class="half-box spacing">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
      </div>

      <div class="half-box spacing">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>

      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>

      <div>
        <a href="login_empresa.">Já está cadastrado?
        </a></label>
      </div>

      <div class="full-box">
        <input type="submit" nome="submit" id="submit">
      </div>

    </form>
  </div>
  <p class="error-validation template"></p>

  <script src="js/scripts.js"></script>
</body>

</html>