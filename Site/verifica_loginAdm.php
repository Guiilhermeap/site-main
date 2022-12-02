<?php

session_start();
if(!$_SESSION['emailAdm']) {
    header('Location: login_adm.php');
    exit();
}