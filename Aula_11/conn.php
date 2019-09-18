<?php

$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "chat";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if(!$conexao){
	echo "Erro na conexão!";
}

function CadastrarUser($nome){
	$sql = 'INSERT INTO user VALUES(null,"'.$nome.'")';
	$resultado = $GLOBALS['conexao']->query($sql);
	if($resultado){
		$id = $GLOBALS['conexao']->insert_id;
		vai("chat.php?user =".$id);
	}
	else{
		alerta("Erro ao cadastrar!");
	}
}

function ListarUsuarios(){
	$sql = 'select * from user';
	$resultado = $GLOBALS['conexao']->query($sql);
	if($resultado){
		return $resultado;
	}
	else{
		return false;
	}
}

function alerta($mensagem){
	echo '<script> alert("'.$mensagem.'");
	</script>';
}
function vai($pagina){
	echo '<script>window.location="'.$pagina.'";</script>';
}

function CadastrarMensagem($msg, $destino, $origem){
	$sql = 'insert into mensagem values(null,"'.$msg.'",'.$destino.','.$origem.')';
	$resultado = $GLOBALS['conexao']->query($sql);

	if($resultado){
		return true;
	}
	else{
		return false;
	}
}

function ListarMensagens(){
	$sql = 'select * from mensagem';
	$resultado = $GLOBALS['conexao']->query($sql);
	return ($resultado) ? $resultado : false;
}