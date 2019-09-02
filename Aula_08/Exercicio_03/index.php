<?php
    $pesoIdeal = false;
	if(isset($_POST) && !empty($_POST))
	{
        if(!empty($_POST['altura'])){ $altura = $_POST['altura'];}
        if(!empty($_POST['sexo'])){$sexo = $_POST['sexo'];}

        if(!empty($sexo))
        {
            if($sexo == "m")
            {
                $pesoIdeal = (72.7 * $altura) - 58;
            }
            else
            {
                $pesoIdeal = (62.1 * $altura) - 44.7;
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
    <title>Exercício 3</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <header>
        <h1 class="center">Peso Ideal</h1>
    </header>

    <section class="container">

        <form action="index.php" method="post">
            <div class="row">
                <div class="input-field col s6 offset-s2">
                    <input type="number" name="altura" step="0.01">
                    <label>Insira sua altura</label>
                </div>
                <p>
                    <label>
                        <input name="sexo" type="radio" value="m"/>
                        <span class="black-text">Masculino</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="sexo" type="radio" value="f"/>
                        <span class="black-text">Feminino</span>
                    </label>
                </p>
            </div>
            <div class="row center">
                <button class="center waves-effect waves-light btn-large" type="submit"> Calcule</button>
            </div>
        </form>

        <?php
	    	if(isset($_POST) && !empty($_POST))
	    	{
	    	    echo '<div class="row">
			    	    <div class="col s12 offset-m2 m8 center">
			    	      <div class="card-panel teal waves-effect waves-light">
			    	        <h2 class="white-text">
			    	        Peso Ideal: '.$pesoIdeal.'
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