<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira de Ciências</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <a class="navbar-brand" href="#">Feira de Ciências</a>
    </nav>

    <form action="cadastraGrupo.php" method="post" class="container mt-4">

        <div class="form-group">
            <label for="projeto">Nome do Projeto</label>
            <input type="text" class="form-control" name="projeto">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição do Projeto</label>
            <input type="text" class="form-control" name="descricao">
        </div>

        <div class="form-group">
            <label for="professor">Professor Orientador</label>
            <select class="form-control" name="professor">
                <option value="Alex Marcelo dos Santos">Alex Marcelo dos Santos</option>
                <option value="Arlete do Carmo Teixeira Ataíde">Arlete do Carmo Teixeira Ataíde</option>
                <option value="Augusto Fabiano Abranches">Augusto Fabiano Abranches</option>
                <option value="Claudio Lopes Ferrini Garcia">Claudio Lopes Ferrini Garcia</option>
                <option value="Diógenes Leandro Leite Pereira">Diógenes Leandro Leite Pereira</option>
                <option value="Evertt Arima Machado">Evertt Arima Machado</option>
                <option value="José Wellington da Costa Silva">José Wellington da Costa Silva</option>
                <option value="Jussimar Nascimento Leal">Jussimar Nascimento Leal</option>
                <option value="Oswaldo Luiz Paquier Bertoli">Oswaldo Luiz Paquier Bertoli</option>
                <option value="Paulo Eduardo Silva Montier">Paulo Eduardo Silva Montier</option>
                <option value="Rodolfo Primocena de Araujo">Rodolfo Primocena de Araujo</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome1">Nome 1º Integrante do Grupo</label>
                <input type="text" class="form-control" name="nome1">
            </div>
            <div class="form-group col-md-6">
                <label for="email1">Email 1º Integrante do Grupo</label>
                <input type="email" class="form-control" name="email1">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome2">Nome 2º Integrante do Grupo</label>
                <input type="text" class="form-control" name="nome2">
            </div>
            <div class="form-group col-md-6">
                <label for="email2">Email 2º Integrante do Grupo</label>
                <input type="email" class="form-control" name="email2">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome3">Nome 3º Integrante do Grupo</label>
                <input type="text" class="form-control" name="nome3">
            </div>
            <div class="form-group col-md-6">
                <label for="email3">Email 3º Integrante do Grupo</label>
                <input type="email" class="form-control" name="email3">
            </div>
        </div>

        <div class="form-group">
            <label for="riscos">Riscos do Projeto</label>
            <select multiple class="form-control" name="riscos">
                <option value="Fogo">Fogo</option>
                <option value="Choque Elétrico">Choque Elétrico</option>
                <option value="Intoxicação">Intoxicação</option>
                <option value="Dano Físico ao Espectador">Dano Físico ao Espectador</option>
                <option value="Dano Material ao Espectador">Dano Material ao Espectador</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-success mx-auto">Enviar</button>
        </div>

    </form>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>