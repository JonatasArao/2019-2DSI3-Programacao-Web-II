<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<form action="home.php" method="get">
    <div class="input-field">
        Escolha sua cor: <input type="color" name="cor">
        <button class="btn waves-effect waves-light bottom" type="submit" name="Vai">Vai</button>
    </div>
</form>

<form class="row" action="index.php" method="get">
    <div class="input-field col s6">
        <label for="variavel">Digite seu nome </label>
        <input type="text" name="variavel">
        <button class="btn waves-effect waves-light bottom" type="submit" name="Enviar">Enviar</button>
    </div>
</form>

<?php
//trabalhando  a integração com formularios html
/*
metodo get
se utiliza para passagem de argumentos e valores (variaveis)
através da url (?)
*/
//captudando um valor via get
if(isset($_GET['variavel']) && !empty($_GET['variavel'])){
    $nome = $_GET['variavel'];
    echo 'Nome: '.$nome;
};
