<!-- <?php

if (isset($_POST['submit'])) {

  include_once('conexao.php');

  $RA = $_POST['ra'];
  $CPF = $_POST['cpf'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $dt_matricula = $_POST['dt_matricula'];
  $curso = $_POST['curso'];
  $periodo = $_POST['periodo'];

  $result = mysqli_query($conexao, "INSERT INTO aluno (RA,CPF,senha,nome,email,telefone,endereco,dt_matricula,curso,periodo)
  VALUES ('$RA','$CPF','$senha','$nome','$email','$telefone','$endereco','$dt_matricula', '$curso', '$periodo')");
}
?> -->

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

    <form id="form" action="cad_aluno.php" method="POST">

      <div class="full-box">
        <label for="email">E-mail</label>
        <input class="site" type="email" name="email" id="email" required placeholder="Digite seu e-mail" data-min-length="3" data-max-length="30"
          data-email-validate>
      </div>

      <div class="full-box">
        <label for="name">Nome Completo</label>
        <input class="site" type="text" name="nome" id="name" required placeholder="Digite seu nome completo" data-min-length="3" data-max-length="40">
      </div>

      <div class="half-box spacing">
        <label for="ra">R.A.</label>
        <input class="site" type="text" name="ra" id="ra" required placeholder="Digite seu ra" data-only-letters data-min-length="13" data-max-length="13">
      </div>

      <div class="half-box spacing">
        <label for="cpf">CPF</label>
        <input class="site" type="text" name="cpf" id="cpf" required placeholder="Digite seu CPF" data-min-length="11"
          data-max-length="11">
      </div>

      <div class="full-box">
        <label for="phone">Telefone</label>
        <input class="site" type="text" name="telefone" id="phone" required placeholder="Digite seu telefone com DDD"
          data-min-length="11" data-max-length="11">
      </div>

      <div class="full-box">
        <label for="endereco">Endereco</label>
        <input class="site" type="text" name="endereco" id="endereco" required placeholder="Digite seu Endereço"
          data-min-length="11" data-max-length="11">
      </div>

      <div class="wrapper">
        <p>CURSOS</p>
        <br>
        <div class="form-group">
          <input class="input_curso" type="radio" id="gti" name="curso" value="GTI" required>
          <label for="curso">Gestão de T.I</label>
        </div>

        <div class="form-group">
          <input class="input_curso" type="radio" id="gcom" name="curso" value="GCOM" required>
          <label for="curso">Gestão Comercial</label>
        </div>

        <div class="form-group">
          <input class="input_curso" type="radio" id="sc" name="curso" value="SEC" required>
          <label for="curso">Secretariado</label>
        </div>

        <div class="form-group">
          <input class="input_curso" type="radio" id="gemp" name="curso" value="GEMP" required>
          <label for="curso">Gestão Empresarial - EAD</label>
        </div>
        <br>

        <p>PERIODO</p>
        <br>
        <div class="form-group">
          <input class="periodo" type="radio" id="matutino" name="periodo" value="MATUTINO" required>
          <label for="periodo">Matutino</label>
        </div>

        <div class="form-group">
          <input class="periodo" type="radio" id="vespertino" name="periodo" value="VESPERTINO" required>
          <label for="periodo">Vespertino</label>
        </div>

        <div class="form-group">
          <input class="periodo" type="radio" id="noturno" name="periodo" value="NOTURNO" required>
          <label for="periodo">Noturno</label>
        </div>

        <div class="form-group">
          <input class="periodo" type="radio" id="ead" name="periodo" value="EAD" required>
          <label for="periodo">EAD</label>
        </div>
      </div>

      <br><br><br><br>
      <div class="full-box">
        <label for="datainclusao">Data da Matrícula</label>
        <input class="site" type="date" name="dt_matricula" id="datematricula" required>
      </div>


      <br><br><br>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input class="site" type="password" name="senha" id="password" placeholder="Digite sua senha"
          data-password-validate required>
      </div>

      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input class="site" type="password" name="passconfirmation" id="passwordconfirmation" required placeholder="Digite novamente sua senha" data-equal="password">
      </div>

      <div>
        <input class="site" type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>

      <div>
        <a href="login_aluno.php">Já está cadastrado?
        </a></label>
      </div>

      <div class="full-box">
        <input class="site" type="submit" name="submit" id="submit">
      </div>

    </form>
  </div>
  <p class="error-validation template"></p>

  <script src="js/scripts.js"></script>
</body>

</html>