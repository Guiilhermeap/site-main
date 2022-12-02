<?php
session_start();
session_destroy();
header('Location: login_aluno.php');
exit();
