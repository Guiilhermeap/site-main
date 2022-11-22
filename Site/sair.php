<?php
session_start();
session_destroy();
header('Location: login_empresa.php');
exit();
