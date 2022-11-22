<?php

session_start();
if(!$_SESSION['cnpjEmp']) {
    header('Location: login_empresa.php');
    exit();
}