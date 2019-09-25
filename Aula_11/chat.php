<?php
include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			setInterval(function(){
				$('#box').load('msgs.php?user=<?php echo $_GET['user']; ?>');
				$('#box').animate({scrollTop: $('#box')[0].scrollHeight}, 500);
			}, 1000);
		});
		$(document).on('submit','#form',function(){
			var dados =  $(this).serialize();
			$.ajax({
				type: 'POST',
				url: 'cadastrar.php',
				data: dados,
				success: function(){
					// o que fazer quando da certo
					$('#msg').val('');
				}
			})
			return false;
		});
	</script>
</head>

<body class="bg-grey">

	<section class="container mt-3">
		<div class="row">
			<div class="col-md-8">
				<div class="bg-chat shadow rounded py-3 px-5" name="box" id="box">		

				</div>	
			</div>
		<div class="col-md-4">
			<ul class="list-group text-center shadow rounded" id="users">
			<!-- mostrar usuarios online -->
			<?php
				$usuarios = ListarUsuarios();
				while($user = $usuarios->fetch_array()){
					echo '<li class="list-group-item bg-chat" id="" value="">'.$user['nome'].'</li>';
				}
			?>
			<!-- fim -->
			</div>	
		</div>

		<br>
		<div class="row">
			<form class="col-md-8" action="cadastrar.php" method="post" id="form">
				<label for="msg">Digitar:</label><br>
				<textarea class="form-control shadow" name="msg" id="msg"></textarea>
				<input type="hidden" name="id" value="<?php echo $_GET['user'];?>">
				<input class="btn btn-success btn-block mt-2 shadow" type="submit" value="Enviar">
			</form>
		</div>
	</section>

</body>

</html>