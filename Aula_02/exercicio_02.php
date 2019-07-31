<?php
    $nome = "Jonatas";
    $idade = 18;
    $anoNascimento = 2019 - $idade;
    $cidade = "Itanhaém";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <script>
        alert(
        "Nome: <?php echo $nome; ?>\nNascido em: <?php echo $anoNascimento; ?>\nMorador de: <?php echo $cidade; ?>"
        );
    </script>
</body>
</html>