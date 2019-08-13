<?php
if(isset($_GET['numeroUsuario']) && !empty($_GET['numeroUsuario'])){
    $numeroUsuario = $_GET['numeroUsuario'];
};

if(isset($_GET['nome']) && !empty($_GET['nome'])){
    $nome = $_GET['nome'];
};

if(isset($_GET['altura']) && !empty($_GET['altura'])){
    $altura = $_GET['altura'];
};

if(isset($_GET['estado_civil']) && !empty($_GET['estado_civil'])){
    $estado_civil = $_GET['estado_civil'];
};

if(isset($_GET['email']) && !empty($_GET['email'])){
    $email = $_GET['email'];
};

if(isset($_GET['dataNascimento']) && !empty($_GET['dataNascimento'])){
    $dataNascimento = $_GET['dataNascimento'];
};

if(isset($_GET['sexo']) && !empty($_GET['sexo'])){
    $sexo = $_GET['sexo'];
};

if(isset($_GET['emprego']) && !empty($_GET['emprego'])){
    $emprego = $_GET['emprego'];
};

if(isset($_GET['casa']) && !empty($_GET['casa'])){

    $casa = $_GET['casa'];
};

if(isset($_GET['idade']) && !empty($_GET['idade'])){
    $idade = $_GET['idade'];
};

if(isset($_GET['descricao']) && !empty($_GET['descricao'])){
    $descricao = $_GET['descricao'];
};
?>
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
                <h1 class="text-center">Relátorio</h1>
            </div>
        </div>
    </header>

    <section class="container fundo-1 py-3 shadow">
        <h1>Dados Pessoais</h1>
        <p>
            <b>Nome Completo:</b> <?php if(!empty($nome)) {echo $nome;} else {echo "Não preenchido";} ?><br>
            <b>Altura:</b> <?php if(!empty($altura)) {echo $altura." m";} else {echo "Não preenchido";} ?><br>
            <b>Estado Cívil:</b> <?php if(!empty($estado_civil)) {echo $estado_civil;} else {echo "Não preenchido";} ?><br>
            <b>Email:</b> <?php if(!empty($email)) {echo $email;} else {echo "Não preenchido";} ?><br>
            <b>Data de Nascimento:</b> <?php if(!empty($dataNascimento)) {echo $dataNascimento;} else {echo "Não preenchido";} ?><br>
            <b>Idade:</b> <?php if(!empty($idade)) {echo $idade;} else {echo "Não preenchido";} ?><br>
            <b>Sexo:</b> <?php if(!empty($sexo)) {echo $sexo;} else {echo "Não preenchido";} ?><br>
            <b>Tem Emprego:</b> <?php if(!empty($emprego)) {echo $emprego;} else {echo "Não";} ?><br>
            <b>Tem Casa:</b> <?php if(!empty($casa)) {echo $casa;} else {echo "Não";} ?><br>
            <b>Descrição:</b> <?php if(!empty($descricao)) {echo $descricao;} else {echo "Não preenchido";} ?><br>
        </p>
    </section>
</body>

</html>