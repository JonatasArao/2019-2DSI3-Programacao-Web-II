<?php
	if(isset($_GET) && !empty($_GET))
	{
        if(!empty($_GET['valor'])){$valor = $_GET['valor'];}
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <header>
        <h1 class="center">Calcule a Tabuada</h1>
    </header>

    <section class="container">

        <form action="index.php" method="get">
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input type="number" name="valor">
                    <label>Insira o número desejado</label>
                </div>
            </div>
            <div class="row center">
                <button class="center waves-effect waves-light btn-large" type="submit"> Calcule</button>
            </div>
        </form>

        <?php
        if(isset($_GET) && !empty($_GET) && !empty($_GET['valor']))
        {
            echo '
            <div class="row">
                <div class="col s6 offset-s3">
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Tabuada do '.$valor.'</h4>
                        </li>';
            for ($i = 1; $i <= $valor ; $i++)
            { 
                echo '
                        <li class="collection-item">
                            '.$valor.' X '.$i.' = '.$valor*$i.'
                        </li>';
            };

            echo '
                    </ul>
                </div>
            </div>';
        }
        ?>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>