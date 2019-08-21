<?php
date_default_timezone_set('America/Sao_Paulo');
if($_POST)
{
    $dataAtual = date_create(date('Y-m-d'));
    $dataNsc = date_create($_POST['dataNsc']);
    $idade = date_diff($dataNsc,$dataAtual)->format('%y');
    $vlrCompra = $_POST['vlrCompra'];
    $formaPg = $_POST['formaPg'];
    $valorFinal = $vlrCompra;

    if($idade < 18 && $formaPg == "debitoDinheiro")
    {
        $valorFinal *= 0.9;
    }
    if($idade >= 18 && $formaPg == "creditoMaster")
    {
        $valorFinal *= 1.05;
    }
    if($idade >= 18 && $formaPg == "creditoVisa")
    {
        $valorFinal *= 1.1;
    }
    if($idade >= 18 && $formaPg == "creditoElo")
    {
        $valorFinal *= 1.2;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicío Prático</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="row">
        <h1 class="center">Sua Compra</h1>
        <form class="col s6 offset-s3 center" action="atividadeDataForm.php" method="POST">
            <div class="input-field">
                <label for="dataNsc">Data de Nascimento</label>
                <input type="date" name="dataNsc" placeholder>
            </div>
            <div class="input-field">
                <label for="vlrCompra">Valor da Compra</label>
                <input type="text" name="vlrCompra">
            </div>
            <div class="input-field">
                <select name="formaPg">
                    <option value="debitoDinheiro">Dinheiro / Débito</option>
                    <option value="creditoMaster">Crédito / Mastercard</option>
                    <option value="creditoVisa">Crédito / Visa</option>
                    <option value="creditoElo">Crédito / Elo</option>
                </select>
                <label for="formaPg">Forma de Pagamento</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Calcular</button>
        </form>
    </div>

<?php
    if($_POST)
    {
        echo'
        <div class="row">
            <div class="col s6 offset-s3 center">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4>Seu Produto: R$ '.$valorFinal.' </h4>
                    </li>
                    <li class="collection-item">Valor Original: R$ '.$vlrCompra.'</li>
                </ul>
            </div>
        </div>
        ';
    }
?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>