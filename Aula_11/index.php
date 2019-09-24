<?php
include("conn.php");
if(isset($_POST['nome'])){
	CadastrarUser($_POST['nome']);
}
?>
<form action="index.php" method="post">
Seu nome:<input type="text" name="nome">
<input type="submit" value="Entrar">
</form>


