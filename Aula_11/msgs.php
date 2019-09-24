<?php
include('conn.php');
    $todas = listarMensagens();
    while($msg = $todas->fetch_array()){
    	echo '<p>'.$msg['origem'].': '.$msg['mensagem'].'</p>';
    }
?>