<?php
include('conn.php');
    $todas = listarMensagens();
    while($msg = $todas->fetch_array()){
    	if($msg['origem'] == $_GET['user'])
    	{
    		echo '<p class="activeuser">'.$msg['nome'].': '.$msg['mensagem'].'</p>';
    	}
    	else
    	{
    		echo '<p>'.$msg['nome'].': '.$msg['mensagem'].'</p>';
    	}
    }
?>