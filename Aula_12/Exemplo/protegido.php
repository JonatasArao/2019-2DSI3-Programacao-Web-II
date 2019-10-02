<?php
session_start();

if(!isset($_SESSION['logado'])){
	header('location: index.php');
}
    echo "Bem vindo ".$_SESSION['login'];
    echo "<br><a href='sair.php'>Sair</a>";