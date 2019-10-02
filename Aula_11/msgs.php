<?php
include('conn.php');
    $todas = listarMensagens();
    while($msg = $todas->fetch_array()){
    	if($msg['origem'] == $_GET['user'])
    	{
    		echo '<p class="activeuser">'.$msg['nome'].' <br> <span class="chat">'.$msg['mensagem'].'</span></p>';
    	}
    	else
    	{
    		echo '<p class="anotheruser">'.$msg['nome'].' <br> <span class="chat">'.$msg['mensagem'].'</span></p>';
    	}
    }
?>