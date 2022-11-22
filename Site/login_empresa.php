<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Empresa</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div id="main-container">
    <h4> FATEC ITAQUAQUECETUBA </h4>
    <h1>Login Empresa</h1>

    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
      <div class="notification is-danger">
        <p class="erro">ERRO: Usuário ou senha inválidos.</p>
      </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <br><br>
    <form method="POST" id="login-form" action="testeLogin.php">
      <div class="full-box">
        <label for="cnpjEmp">CNPJ</label>
        <input type="text" name="cnpjEmp" id="cnpjEmp" placeholder="Digite seu CNPJ" data-min-length="5" data-max-length="14" data-cnpj-validate>
      </div>

      <div class="full-box">
        <label for="senhaEmp">Senha</label>
        <input type="password" name="senhaEmp" id="senhaEmp" placeholder="Digite sua senha" data-password-validate data-required>
      </div>

      <div>
        <a href="cad_empresa.php">Não tem cadastro?
          <br><br>
        </a>
      </div>

      <div class="full-box">
        <input id="btn-submit" type="submit" value="Login">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>

</body>

</html>