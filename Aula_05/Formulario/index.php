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
        <form action="dados.php" method="get">
            <fieldset>
                <legend>Dados Pessoais</legend>

                <input type="hidden" id="numeroUsuario" name="numeroUsuario" value="1">

                <div class="form-group">
                    <label>Nome Completo</label>
                    <input class="form-control" type="text" name="nome">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Altura</label>
                        <input class="form-control" type="number" name="altura" placeholder="em Metros" step="0.10">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Estado Cívil</label>
                        <select class="form-control" name="estado_civil">
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Viuvo(a)">Viúvo(a)</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="abc_123@email.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Data de Nascimento</label>
                        <input type="date" name="dataNascimento" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3 text-center my-auto">
                        <label>Sexo</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino">
                            <label class="form-check-label" for="sexo">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Feminino">
                            <label class="form-check-label" for="sexo">
                                Feminino
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-3 text-center my-auto">
                        <label>Situação de Vida</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sim" id="defaultCheck1"
                                name="emprego">
                            <label class="form-check-label">
                                Tem emprego
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sim" id="defaultCheck1" name="casa">
                            <label class="form-check-label">
                                Tem casa
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Idade</label>
                        <input type="text" class="form-control text-center" id="display" value="0" readonly>
                        <input type="range" class="form-control-range" id="idade" name="idade" min="18" max="120"
                            oninput="display.value=value" onchange="display.value=value">
                    </div>
                </div>

                <div class="form-group">
                    <label>Fale sobre você</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                </div>

                <div class="form-row">
                    <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                </div>
            </fieldset>

    </section>
</body>

</html>