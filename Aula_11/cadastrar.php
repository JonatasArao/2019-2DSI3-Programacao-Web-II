<?php
include("conn.php");
if($_POST['msg']){
	CadastrarMensagem($_POST['msg'],0,$_POST['id']);
}

?>