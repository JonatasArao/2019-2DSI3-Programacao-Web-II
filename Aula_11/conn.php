<?php

$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "chat";

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if(!$conexao){
	echo "Erro na conexão!";
}

function CadastrarUser($nome){
	$sql = 'INSERT INTO user VALUES(null,"'.$nome.'")';
	$resultado = $GLOBALS['conexao']->query($sql);
	if($resultado){
		$id = $GLOBALS['conexao']->insert_id;
		vai("chat.php?user=".$id);
	}else{
		alerta("Erro ao cadastrar!");
	}
}
function alerta($mensagem){
	echo '<script>alert("'.$mensagem.'");</script>';
}
function vai($pagina){
	echo '<script>window.location="'.$pagina.'";</script>';
}
function ListarUsuarios(){
	$sql = 'SELECT * FROM user';
	$resultado = $GLOBALS['conexao']->query($sql);
	if($resultado){
		return $resultado;
	}else{
		return false;
	}
}
function CadastrarMensagem($msg,$destino,$origem){
	$sql = 'INSERT INTO mensagem VALUES(null,"'.$msg.'",'.$destino.','.$origem.')';
	$resultado = $GLOBALS['conexao']->query($sql);
	echo $sql;
	//esta linha abaixo faz a mesma coisa que a estrutura if else abaixo:
	//return $resultado ?  true :  false;
	if($resultado){
		return true;
	}else{
		return false;
	}
}
function ListarMensagens(){
	$sql = 'SELECT m.*, u.nome FROM mensagem m, user u WHERE u.id = m.origem ORDER BY id ASC';
	$resultado = $GLOBALS['conexao']->query($sql);	
	return ($resultado) ? $resultado : false;
}