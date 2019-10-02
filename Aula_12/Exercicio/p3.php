<?php
//trabalhando com sessão!
session_start();

if($_SESSION['paginas'] != array(
    "p1" => true,
    "p2" => true,
    "p3" => false,
    "p4" => false,
    "p5" => false
)){
    header('location: p2.php');
}

if(isset($_SESSION['respostas'][2])){
    header('location: resultado.php');
}

if($_POST){
    $_SESSION['paginas']['p3'] = true;
    $_SESSION['respostas'][2] = $_POST['resposta2'];
    header('location: p4.php');
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
                <img src="img/questao2.jpg" class="img-fluid mx-auto">
            </div>
            <div class="col-md-6 mt-3 mt-md-0 col align-self-center">
                <form class="text-center" method="post">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta2"
                            value="A">
                        <label class="form-check-label" for="resposta2">
                            A
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta2"
                            value="B">
                        <label class="form-check-label" for="resposta2">
                            B
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta2"
                            value="C">
                        <label class="form-check-label" for="resposta2">
                            C
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta2"
                            value="D">
                        <label class="form-check-label" for="resposta2">
                            D
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta2"
                            value="E">
                        <label class="form-check-label" for="resposta2">
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