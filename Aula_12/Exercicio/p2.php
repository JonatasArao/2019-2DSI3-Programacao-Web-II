<?php
//trabalhando com sessão!
session_start();

if($_SESSION['paginas'] != array(
    "p1" => true,
    "p2" => false,
    "p3" => false,
    "p4" => false,
    "p5" => false
)){
    header('location: p1.php');
}

if(isset($_SESSION['respostas'][1])){
    header('location: resultado.php');
}

if($_POST){
    $_SESSION['paginas']['p2'] = true;
    $_SESSION['respostas'][1] = $_POST['resposta1'];
    header('location: p3.php');
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
            <div class="col-md-6 row">
                <img src="img/questao1.jpg" class="img-fluid mx-auto">
            </div>
            <div class="col-md-6 mt-3 mt-md-0 col align-self-center">
                <form class="text-center" method="post">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta1"
                            value="A">
                        <label class="form-check-label" for="resposta1">
                            A
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta1"
                            value="B">
                        <label class="form-check-label" for="resposta1">
                            B
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta1"
                            value="C">
                        <label class="form-check-label" for="resposta1">
                            C
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta1"
                            value="D">
                        <label class="form-check-label" for="resposta1">
                            D
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta1"
                            value="E">
                        <label class="form-check-label" for="resposta1">
                            E
                        </label>
                    </div>
                    <div class="row">
                        <input class="btn btn-secondary mx-auto my-2" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
</body>

</html>