<?php
//trabalhando com sessão!
session_start();

if($_POST){
	$_SESSION['nome'] = $_POST['nome'];
	$_SESSION['email'] = $_POST['email'];
    $_SESSION['logado'] = true;
    $_SESSION['p2'] = false;
    $_SESSION['p3'] = false;
    $_SESSION['p4'] = false;
    $_SESSION['p5'] = false;
	header('location: p2.php');
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Quiz</a>
    </nav>

    <section class="container">
        <div class="row mt-5">
            <div class="col-6 mx-auto">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="row">
                        <input class="btn btn-secondary mx-auto my-2" type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
</body>

</html>