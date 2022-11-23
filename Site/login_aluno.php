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
    
    <form id="login-form" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input class="site" type="email" name="email" id="email" required placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <br><br><br>
      <div class="full-box">
        <label for="lastname">Senha</label>
        <input class="site" type="password" name="password" id="password" required placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <a href="#">Esqueci minha senha
      </a>
      <div>
        <a href="cad_aluno.html">Não tem cadastro?
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