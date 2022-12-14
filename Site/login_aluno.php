<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Aluno</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div id="main-container">
    <h4> FATEC ITAQUAQUECETUBA </h4> 
    <h1>Login Aluno</h1>

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
    
    <form method="POST" id="login-form" action="testeLoginAluno.php">
      <div class="full-box">
        <label for="emailAlu">E-mail</label>
        <input class="site" type="email" name="emailAlu" id="emailAlu" required placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <br><br><br>
      <div class="full-box">
        <label for="senhaAlu">Senha</label>
        <input class="site" type="password" name="senhaAlu" id="senhaAlu" required placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <a href="#">Esqueci minha senha
      </a>
      <div>
        <a href="cad_aluno.php">Não tem cadastro?
    <br><br>
        </a> 
      </div>
      <div class="full-box">
        <input class="site" id="btn-submit" type="submit" value="Login">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>