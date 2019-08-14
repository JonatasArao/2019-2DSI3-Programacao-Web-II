<?php
if(isset($_GET))
{
    if(isset($_GET['nome']))
    {
        $nome = $_GET['nome'];
    };
    if(isset($_GET['idade']))
    {
        $idade = $_GET['idade']; 
        $anoNsc = 2019 - $idade;  
    };
    if(isset($_GET['sexo']))
    {
        $sexo = $_GET['sexo'];
    };
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de Fixação</title>
    <style>
        .m {
            background-color: pink;
            color: blue;
        }

        .f {
            background-color: black;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <form action="Exercicio_de_Fixacao.php" method="get">
        <div class="form-row">
            <div class="form-group col-md-6">
            Nome Completo: <input type="text" name="nome" class="form-control"><br>
            </div>

            <div class="form-group col-md-6">
            Idade: <input type="number" name="idade" class="form-control"><br>
            </div>
        </div>

        <div class="form-group text-center">
            <input type="radio" name="sexo" value="m">
            <label>Masculino</label>
            <input type="radio" name="sexo" value="f">
            <label>Feminino</label>
        </div>
        <div class="form-row">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
        </div>

        </form>


        <div class="<?php echo $sexo; ?> text-center p-5 mt-3">
            <?php
        if(isset($_GET))
        {
            if(isset($_GET['sexo']))
            {
                if($sexo == "f")
                {
                    echo "Olá, bem vinda $nome, ao que parece você nasceu em $anoNsc";
                }
                else
                {
                    echo "Eae $nome você é de $anoNsc";
                }
            }
        }
        ?>
        </div>
    </div>
</body>

</html>