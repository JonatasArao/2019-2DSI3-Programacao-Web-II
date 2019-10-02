<?php
//trabalhando com sessão!
session_start();

if($_POST){
	if($_POST['login'] == 'aruto' && $_POST['senha'] == 'zeroone'){
		$_SESSION['senha'] = $_POST['senha'];
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['logado'] = true;
		header('location: protegido.php');
	}else{
		$_SESSION['logado'] = false;
		echo "Usuário e senha inválidos";
	}
}
?>
<form method="post">
	Login <input type="text" name="login"><br>
	Senha <input type="password" name="senha"><br>
	<input type="submit" name="Entrar">
</form>