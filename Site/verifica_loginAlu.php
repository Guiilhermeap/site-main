<?php

session_start();
if(!$_SESSION['emailAlu']) {
    header('Location: login_aluno.php');
    exit();
}