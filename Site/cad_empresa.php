<?php

if (isset($_POST['submit'])) {

  include_once('conexao.php');

  $CNPJ_emp = $_POST['cnpj_emp'];
  $senha_emp = $_POST['senha_emp'];
  $nome_emp = $_POST['nome_emp'];
  $email_emp = $_POST['email_emp'];
  $telefone_emp = $_POST['telefone_emp'];
  $endereco_emp = $_POST['endereco_emp'];
  $areatuacao_emp = $_POST['atuacao_emp'];

  $result = mysqli_query($conexao, "INSERT INTO empresas(CNPJ,senha,nome,email,telefone,endereco,area_atuacao)
  VALUES ('$CNPJ_emp','$senha_emp','$nome_emp','$email_emp','$telefone_emp','$endereco_emp','$areatuacao_emp')");

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
        <input type="email" name="email_emp" id="email_emp" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>

      <div class="full-box">
        <label for="name">Nome da Empresa</label>
        <input type="text" name="nome_emp" id="nome_emp" placeholder="Digite o nome da empresa" data-required data-min-length="3" data-max-length="30">
      </div>

      <div class="half-box spacing">
        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj_emp" id="cnpj_emp" placeholder="Digite o cnpj" data-required data-only-numbers>
      </div>

      <div class="half-box spacing">
        <label for="atuacao">Ârea de atuação</label>
        <input type="text" name="atuacao_emp" id="atuacao_emp" placeholder="Digite a ârea de atuação" data-required data-only-numbers>
      </div>

      <div class="half-box spacing">
        <label for="telefone">Tel</label>
        <input type="text" name="telefone_emp" id="telefone_emp" placeholder="Digite o telefone" data-required data-only-numbers>
      </div>

      <div class="full-box">
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco_emp" id="endereco_emp" placeholder="Digite seu Endereço" data-min-length="11" data-max-length="11" data-required>
      </div>

      <div class="half-box spacing">
        <label for="senha">Senha</label>
        <input type="password" name="senha_emp" id="senha_emp" placeholder="Digite sua senha" data-password-validate data-required>
      </div>

      <div class="half-box spacing">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation_emp" id="passconfirmation_emp" placeholder="Digite novamente sua senha" data-equal="password">
      </div>

      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>

      <div>
        <a href="login_empresa.html">Já está cadastrado?
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