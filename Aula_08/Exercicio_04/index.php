<?php
	if(isset($_POST) && !empty($_POST))
	{
        if(!empty($_POST['qtdMaca'])){$qtdMaca = $_POST['qtdMaca'];
            if($qtdMaca <= 11){
                $vlrTotal = $qtdMaca * 1.2;
            }
            if($qtdMaca >= 12 && $qtdMaca <= 23){
                $vlrTotal = $qtdMaca * 1;
            }
            if($qtdMaca > 23){
                $vlrTotal = $qtdMaca * 0.8;
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
    <title>Exercício 4</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <header>
        <h1 class="center">Hortifrúti - Maçã</h1>
    </header>

    <section>
        <section class="container">

            <form action="index.php" method="post">
                <div class="row">
                    <div class="input-field">
                        <input type="number" name="qtdMaca">
                        <label>Quantidade de Maçãs</label>
                    </div>
                </div>
                <div class="row center">
                    <button class="center waves-effect waves-light btn-large" type="submit">Compre</button>
                </div>
            </form>

            <?php
                if(isset($_POST) && !empty($_POST) && !empty($_POST['qtdMaca']))
                {
                    echo '<div class="row">
                            <div class="col s12 offset-m2 m8 center">
                              <div class="card-panel teal waves-effect waves-light">
                                <h2 class="white-text">
                                Valor Total: R$'.number_format($vlrTotal, 2, ',', '').'
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