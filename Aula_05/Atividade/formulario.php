<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header class="container-fluid fundo-2 text-white p-3 shadow">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Cadastro</h1>
            </div>
        </div>
    </header>

    <section class="container fundo-1 py-3 shadow">
        <form>
            <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="form-group">
                    <label>Nome Completo</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Altura</label>
                        <input class="form-control" type="number" name="altura" placeholder="em Metros" step="0.10">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Sexo</label>
                        <select class="form-control" name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado Cívil</label>
                        <select class="form-control" name="estado_civil">
                            <option value="solteiro_a">Solteiro(a)</option>
                            <option value="casado_a">Casado(a)</option>
                            <option value="viuvo_a">Viúvo(a)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="abc_123@email.com">
                </div>
            </fieldset>

    </section>
</body>

</html>