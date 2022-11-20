<?php

// if (isset($_POST['submit'])) {

//   // print_r('Nome: ' . $_POST['nome']);
//   // print_r('<br>');
//   // print_r('Rs: ' . $_POST['RA']);
//   // print_r('<br>');
//   // print_r('senha: ' . $_POST['senha']);
//   // print_r('<br>');
//   // print_r('email: ' . $_POST['email']);
//   // print_r('<br>');
//   // print_r('telefone: ' . $_POST['telefone']);
//   // print_r('<br>');
//   // print_r('endereco: ' . $_POST['endereco']);
//   // print_r('<br>');
//   // print_r('CPF: ' . $_POST['CPF']);

//   include_once('conexao.php');

//   $RA = $_POST['RA'];
//   $senha = $_POST['senha'];
//   $nome = $_POST['nome'];
//   $email = $_POST['email'];
//   $telefone = $_POST['telefone'];
//   $endereco = $_POST['endereco'];
//   $dt_matricula = $_POST['dt_matricula'];
//   $CPF = $_POST['CPF'];

//   $result = mysqli_query($conexao, "INSERT INTO aluno (RA,senha,email,telefone,endereco,dt_matricula,CPF)
//   VALUES ('$RA','$senha','$nome','$email','$telefone','$endereco','$dt_matricula','$CPF')");
// }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="main-container">
    <h4> FATEC ITAQUAQUECETUBA </h4>
    <h1>Cadastre-se para acessar o sistema</h1>

    <form id="register-form" action="cad_aluno.php" method="POST">

        <div class="full-box">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>

        <div class="full-box">
          <label for="name">Nome Completo</label>
          <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="40">
        </div>

        <div class="half-box spacing">
          <label for="ra">R.A.</label>
          <input type="text" name="RA" id="ra" placeholder="Digite seu ra" data-required data-only-letters data-min-length="13" data-max-length="13" data-required>
        </div>

        <div class="half-box spacing">
          <label for="cpf">CPF</label>
          <input type="text" name="CPF" id="cpf" placeholder="Digite seu CPF" data-min-length="11" data-max-length="11" data-required>
        </div>

        <div class="full-box">
          <label for="phone">Telefone</label>
          <input type="text" name="telefone" id="phone" placeholder="Digite seu telefone com DDD" data-min-length="11" data-max-length="11" data-required>
        </div>

        <div class="full-box">
          <label for="endereco">Endereco</label>
          <input type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço" data-min-length="11" data-max-length="11" data-required>
        </div>

        <div class="ls-custom-select">
          <label class="ls-label col-md 2" for="curso">Curso</label>
          <select class="ls-select" name="selectcurso" id="selectcurso">
            <option value="gcom">Gestão Comercial</option>
            <option value="gti">Gestão de T.I.</option>
            <option value="sec">Secretariado</option>
            <option value="geead">Gestão Empresarial</option>
          </select>
        </div>

        <div class="ls-custom-select">
          <form action="enviar.php" method="POST" enctype="multipart/form-data">
            <label for="curso">Período</label>
            <select class="ls-select" name="selectperiodo" id="selectperiodo" required />
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>
            <option value="ead">EAD</option>
            </select>
        </div>

        <br><br><br><br>
        <div class="full-box">
          <label for="datainclusao">Data da Matrícula</label>
          <input type="date" name="dt_matricula" id="datematricula">
        </div>

        <br><br><br>
        <div class="half-box spacing">
          <label for="lastname">Senha</label>
          <input type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required>
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
          <a href="login_aluno.html">Já está cadastrado?
          </a></label>
        </div>

        <div class="full-box">
          <input type="submit" name="submit" id="submit">
        </div>

    </form>
  </div>
  <p class="error-validation template"></p>


  <script src="js/scripts.js"></script>
</body>

</html>