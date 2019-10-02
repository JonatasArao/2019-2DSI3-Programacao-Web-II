<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['senha']);
unset($_SESSION['logado']);
session_destroy();
header("location: index.php");