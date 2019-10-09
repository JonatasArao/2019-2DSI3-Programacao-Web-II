<?php
if($_POST){
	$destino = $_POST['pasta'];
	if(!is_dir($destino)){
		mkdir($destino,0777);
	}
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $destino.'/'.$_FILES['foto']['name'])){
		echo "Deu certo";
	}
	else{
		echo "Deu errado";
	}
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
	Pasta:
	<input type="text" name="pasta"><br>
	Selecione um arquivo:
	<input type="file" name="foto">
	<br>
	<input type="submit" name="enviar">
</form>

<?php
if(isset($_GET['dir'])){
	if($handle = opendir($_GET['dir'])){
		while ($entry = readdir($handle)) {
			echo '<br>'.$entry;
		}
		closedir($handle);
	}
}
?>