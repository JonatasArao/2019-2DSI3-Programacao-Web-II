<?php
	$triangulo = false;
	$tipoTriangulo;
	if(isset($_POST) && !empty($_POST))
	{
		if(!empty($_POST['ladoA'])){$ladoA = $_POST['ladoA'];}
		if(!empty($_POST['ladoB'])){$ladoB = $_POST['ladoB'];}
		if(!empty($_POST['ladoC'])){$ladoC = $_POST['ladoC'];}
		
		if (is_numeric($ladoA) && is_numeric($ladoB) && is_numeric($ladoC)) 
		{ 
			if($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA)
			{
				$triangulo = true;
			}
			if($triangulo)
			{
				if($ladoA == $ladoB && $ladoA == $ladoC && $ladoB == $ladoC)
				{
					$tipoTriangulo = "Equilátero";
				}
				if(
					($ladoA == $ladoB && ($ladoA != $ladoC || $ladoB != $ladoC)) ||
					($ladoA == $ladoC && ($ladoA != $ladoB || $ladoC != $ladoB)) ||
					($ladoB == $ladoC && ($ladoB != $ladoA || $ladoC != $ladoA))
				)
				{
					$tipoTriangulo = "Isósceles";
				}
				if($ladoA != $ladoB && $ladoA != $ladoC && $ladoB != $ladoC){
					$tipoTriangulo = "Escaleno";
				}
			}
		} 	
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercício 1</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

	<header>
		<h1 class="center">Verifique seu Triângulo</h1>
	</header>

	<section class="container">
		<form action="index.php" method="post">
			<div class="row">
				<div class="input-field col s4">
					<input type="number" name="ladoA">
					<label>Lado A</label>
				</div>
				<div class="input-field col s4">
					<input type="number" name="ladoB">
					<label>Lado B</label>
				</div>
				<div class="input-field col s4">
					<input type="number" name="ladoC">
					<label>Lado C</label>
				</div>
			</div>
			<div class="row center">
				<button class="center waves-effect waves-light btn-large" type="submit"> Verificar</button>
			</div>
		</form>

		<?php
	    	if(isset($_POST) && !empty($_POST))
	    	{
	    		if($triangulo)
	    		{
	    			echo '<div class="row">
						    <div class="col s12 offset-m2 m8 center">
						      <div class="card-panel teal waves-effect waves-light">
						        <h2 class="white-text">
						        Triângulo '.$tipoTriangulo.'
						        </h2>
						      </div>
						    </div>
						  </div>';
	    		}
	    		else
	    		{
	    			echo '<div class="row">
						    <div class="col s12 offset-m2 m8 center">
						      <div class="card-panel teal waves-effect waves-light">
						        <h2 class="white-text">
						        Triângulo Inválido
						        </h2>
						      </div>
						    </div>
						  </div>';
	    		}
	    	}
	    ?>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>