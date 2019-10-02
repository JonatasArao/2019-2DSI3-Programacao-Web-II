<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['paginas']);
unset($_SESSION['respostas']);
session_destroy();
header("location: p1.php");