<?php
include_once('conecta.php');

if($_POST)
{
    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $nome3 = $_POST['nome3'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $email3 = $_POST['email3'];
    $projeto = $_POST['projeto'];
    $descricao = $_POST['descricao'];
    $professor = $_POST['professor'];
    $riscos = implode(", ", $_POST['riscos']);
    if(empty($riscos)){
        $riscos = "Nenhum";
    }

    $sql = 'INSERT INTO cadastro (nmAluno1,nmAluno2,nmAluno3,emailAluno1,emailAluno2,emailAluno3,nmProjeto,dsProjeto,nmProfessor,riscos)
            VALUES
            ("'.$nome1.'", "'.$nome2.'", "'.$nome3.'", "'.$email1.'", "'.$email2.'", "'.$email3.'", "'.$projeto.'", "'.$descricao.'", "'.$professor.'", "'.$riscos.'")';

    $consulta = $GLOBALS['conecta']->query($sql);

    header('Location: cadastroConfirmado.php');
}
