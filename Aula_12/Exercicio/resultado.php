<?php
//trabalhando com sessão!
session_start();
$qtdAcertos = 0;

if($_SESSION['paginas'] != array(
    "p1" => true,
    "p2" => true,
    "p3" => true,
    "p4" => true,
    "p5" => true
)){
    header('location: p5.php');
}
if($_SESSION['respostas'][1] == "B"){ $resultado[1] = true; } else { $resultado[1] = false; }
if($_SESSION['respostas'][2] == "B"){ $resultado[2] = true; } else { $resultado[2] = false; }
if($_SESSION['respostas'][3] == "A"){ $resultado[3] = true; } else { $resultado[3] = false; }
if($_SESSION['respostas'][4] == "B"){ $resultado[4] = true; } else { $resultado[4] = false; }
for($i = 1; $i<=4;$i++){
    if($resultado[$i]==true){
        $qtdAcertos++;
    }
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
            <div class="card text-white bg-success mb-3 mx-auto">
                <div class="card-header">Nome: <?php echo $_SESSION['nome']; ?></div>
                <div class="card-body">
                    <h5 class="card-title">Quantidade de Acertos: <?php echo $qtdAcertos; ?></h5>
                    <?php
                        for($i = 1; $i<=4;$i++){
                            echo '<p> Questão '.$i.': Resposta: '.$_SESSION['respostas'][$i];
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-secondary mx-auto" href="sair.php">Sair</a>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
</body>

</html>