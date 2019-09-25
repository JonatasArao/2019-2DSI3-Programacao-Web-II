<?php
include("conn.php");
if(isset($_POST['nome'])){
	CadastrarUser($_POST['nome']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela Inicial</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-grey">
	<section class="container">
		<div class="row mt-5">
			<div class="col-6 mx-auto">
				<form action="index.php" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="nome" placeholder="Nome">
						<div class="row">
							<input class="btn btn-success mx-auto my-2" type="submit" value="Entrar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>

</html>


