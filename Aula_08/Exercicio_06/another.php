<?php
	if(isset($_POST) && !empty($_POST))
	{
        $nome = $_POST['nome'];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <header>
        <h1 class="center"><?php echo $nome; ?> agora escreva seu email</h1>
    </header>

    <section>
        <section class="container">

            <form action="anotheranother.php" method="post">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <div class="row">
                    <div class="input-field">
                        <input type="email" name="email">
                        <label>Email aqui</label>
                    </div>
                </div>
                <div class="row center">
                    <button class="center waves-effect waves-light btn-large" type="submit">Enviar</button>
                </div>
            </form>

        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>