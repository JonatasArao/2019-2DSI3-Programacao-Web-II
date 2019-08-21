<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .padding-t-2{
            padding-top: 2vh;
        }
    </style>
</head>

<body>

    <div class="row padding-t-2">
        <form class="col s6 offset-s3 center" action="dataForm.php" method="post">
            <div class="input-field">
                <label for="compra">Valor da Compra</label>
                <input type="text" name="compra">
            </div>

            <div class="input-field">
                <select name="forma">
                    <option value="avista">À vista</option>
                    <option value="2x">2 vezes</option>
                    <option value="3x">3 vezes</option>
                    <option value="4x">4 vezes</option>
                </select>
                <label for="forma">Forma</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Calcular</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>

<?php
date_default_timezone_set('America/Sao_Paulo');
if($_POST)
{
    $compra = $_POST['compra'];
    $forma = $_POST['forma'];

    echo '<hr> <div class="center">';
    if($forma == '2x')
    {
        $parcela = $compra/2;
        echo '<br>1º pagamento em: ';
        $pg1 = date('d/m/Y', strtotime('+1 month'));
        echo $pg1.' no valor de R$'.$parcela;
        echo '<br>2º pagamento em: ';
        $pg2 = date('d/m/Y', strtotime('+2 month'));
        echo $pg2.' no valor de R$'.$parcela;
    }
    else if($forma == '3x')
    {
        $parcela = $compra/3;
        echo '<br>1º pagamento em: ';
        $pg1 = date('d/m/Y', strtotime('+1 month'));
        echo $pg1.' no valor de R$'.$parcela;
        echo '<br>2º pagamento em: ';
        $pg2 = date('d/m/Y', strtotime('+2 month'));
        echo $pg2.' no valor de R$'.$parcela;
        echo '<br>3º pagamento em: ';
        $pg3 = date('d/m/Y', strtotime('+3 month'));
        echo $pg3.' no valor de R$'.$parcela;
    }
    else if($forma == '4x')
    {
        $parcela = $compra/4;
        echo '<br>1º pagamento em: ';
        $pg1 = date('d/m/Y', strtotime('+1 month'));
        echo $pg1.' no valor de R$'.$parcela;
        echo '<br>2º pagamento em: ';
        $pg2 = date('d/m/Y', strtotime('+2 month'));
        echo $pg2.' no valor de R$'.$parcela;
        echo '<br>3º pagamento em: ';
        $pg3 = date('d/m/Y', strtotime('+3 month'));
        echo $pg3.' no valor de R$'.$parcela;
        echo '<br>4º pagamento em: ';
        $pg4 = date('d/m/Y', strtotime('+4 month'));
        echo $pg4.' no valor de R$'.$parcela;
    }
    else
    {
        echo '<br>Seu pagamento em: ';
        $pg1 = date('d/m/Y');
        echo $pg1.' no valor de R$'.$compra;
    }
    echo '</div>';
}