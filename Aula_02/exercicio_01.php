<!DOCTYPE html>
<?php
    $nome = "Jonatas";
    $idade = 18;
    $anoNascimento = 2019 - $idade;
    $cidade = "Itanhaém";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>

    <h2>a)</h2>
    <p>
    Nome: <?php echo $nome; ?> <br>
    Nascido em: <?php echo $anoNascimento; ?> <br>
    Morador de: <?php echo $cidade; ?>     
    </p>

    <h2>b)</h2>
    <p>
    <b>Nome:</b> <?php echo $nome; ?> <br>
    <i>Nascido em:</i> <?php echo $anoNascimento; ?> <br>
    <u>Morador de:</u> <?php echo $cidade; ?>     
    </p>

    <h2>c)</h2>
    <p>
    Nome: <font color="red"><?php echo $nome; ?></font> <br>
    Nascido em: <font color="blue"><?php echo $anoNascimento; ?></font><br>
    Morador de: <font color="green"><?php echo $cidade; ?></font>     
    </p>

    <h2>d)</h2>
    <p>
    Nome: <font color="red"><?php echo '"'.$nome.'"'; ?></font> <br>
    Nascido em: <font color="blue"><?php echo "'".$anoNascimento."'"; ?></font><br>
    Morador de: <font color="green"><?php echo '"'.$cidade."'"; ?></font>     
    </p>
</body>
</html>