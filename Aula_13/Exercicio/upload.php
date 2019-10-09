<!DOCTYPE html>
<html>

<head>
	<title>Upload</title>
</head>

<body>
	<div class="upload">
		<form action="index.php" method="post" enctype="multipart/form-data">
			<label>Pasta</label>
			<select name="">
				<?php
					if($handle = opendir("Arquivos")){
						while ($entry = readdir($handle)) {
							if(is_dir($entry)){
								echo '<option value="'.$entry.'">'.$entry.'</option>';
							}
						}
						closedir($handle);
					}
				?>
			</select>
			<label for="arquivo">Selecione um arquivo:</label>
			<input type="file" name="arquivo">
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>

</html>