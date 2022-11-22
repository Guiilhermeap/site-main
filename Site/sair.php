<?php
    session_start();
    unset($_SESSION['loginCnpj']);
    unset($_SESSION['senhaEmp']);
    header("Location: login_empresa.php");
?>