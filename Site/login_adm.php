<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="main-container">
        <h4> FATEC ITAQUAQUECETUBA </h4>
        <h1>Login Administrador</h1>

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
        <form method="POST" id="login-form" action="testeLogin_adm.php">
            <div class="full-box">
                <label for="emailAdm">E-mail</label>
                <input class="site" type="text" name="emailAdm" id="emailAdm" required placeholder="Entre com seu E-mail" data-min-length="5" data-max-length="14" data-cnpj-validate>
            </div>

            <div class="full-box">
                <label for="senhaAdm">Senha</label>
                <input class="site" type="password" name="senhaAdm" id="senhaAdm" required placeholder="Digite sua senha" data-password-validate data-required>
            </div>

            <div>
                <a href="cad_adm.php">Não tem cadastro?
                    <br><br>
                </a>
            </div>

            <div class="full-box">
                <input class="site" id="btn-submit" type="submit" value="Login">
            </div>
        </form>
    </div>
    <p class="error-validation template"></p>

</body>

</html>