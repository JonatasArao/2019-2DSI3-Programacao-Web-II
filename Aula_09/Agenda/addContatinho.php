<?php
include_once('conn.php');

if($_POST)
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = 'INSERT INTO agenda (nome, telefone, email)
            VALUES
            ("'.$nome.'", "'.$telefone.'", "'.$email.'")';

    $consulta = $GLOBALS['conn']->query($sql);
}