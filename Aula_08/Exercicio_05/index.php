<?php
	if(isset($_POST) && !empty($_POST))
	{
        $qtdCombustivel = $_POST['qtdCombustivel'];
        $distancia = $_POST['distancia'];
        $vlrCombustivel = $_POST['vlrCombustivel'];
        $vlrViagem = ($distancia / $qtdCombustivel) * $vlrCombustivel;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 5</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <header>
        <h1 class="center">Gasto - Viagem</h1>
    </header>

    <section>
        <section class="container">

            <form action="index.php" method="post">
                <div class="row">
                    <div class="input-field">
                        <input type="number" name="qtdCombustivel">
                        <label>Quantidade de combustível abastecida</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input type="number" name="distancia">
                        <label>Distância percorrida (km)</label>
                    </div>
                </div>
                <div class="row center">
                    <label>
                        <input name="vlrCombustivel" type="radio" value=2.75 />
                        <span class="black-text">Etanol</span>
                    </label>
                    <label>
                        <input name="vlrCombustivel" type="radio" value=3.99 />
                        <span class="black-text">Gasolina</span>
                    </label>
                    <label>
                        <input name="vlrCombustivel" type="radio" value=3.15 />
                        <span class="black-text">GNV</span>
                    </label>
                </div>
                <div class="row center">
                    <button class="center waves-effect waves-light btn-large" type="submit">Compre</button>
                </div>
            </form>

            <?php
	    	if(isset($_POST) && !empty($_POST) && !empty($vlrViagem))
	    	{
	    	    echo '<div class="row">
			    	    <div class="col s12 offset-m2 m8 center">
			    	      <div class="card-panel teal waves-effect waves-light">
			    	        <h2 class="white-text">
			    	        Valor da Viagem: '.$vlrViagem.'
			    	        </h2>
			    	      </div>
			    	    </div>
			    	  </div>';
	    	}
	        ?>

        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>