<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$db_name = "exemplo";

$conn = new mysqli($servername, $username, $password, $db_name);
if(!$conn)
{
    echo "Conexão deu ruim";
}