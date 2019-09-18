<?php

include_once('conecta.php');

$sql = 'SELECT * FROM cadastro';

$consulta = $GLOBALS['conecta']->query($sql);

while($cadastro = $consulta->fetch_array())
{
    echo ' 
    <div class="col-md-6">
        <div class="card mt-3 mt-md-2">
            <div class="card-header">
                Professor Orientador: '.$cadastro['nmProfessor'].'
            </div>
            <div class="card-body">
                <h4 class="card-title">Projeto: '.$cadastro['nmProjeto'].'</h4>
                <p class="card-text"><b>Descrição:</b> '.$cadastro['dsProjeto'].' - <b>Riscos do Projeto:</b> '.$cadastro['riscos'].'</p>
                <ul class="list-group list-group-flush">
                    <h5 class="list-group-item border-0">Membros do Grupo</h5>
                    <li class="list-group-item">'.$cadastro['nmAluno1'].' - '.$cadastro['emailAluno1'].'</li>
                    <li class="list-group-item">'.$cadastro['nmAluno2'].' - '.$cadastro['emailAluno2'].'</li>
                    <li class="list-group-item">'.$cadastro['nmAluno3'].' - '.$cadastro['emailAluno3'].'</li>
                </ul>
            </div>
        </div>
    </div>
    ';
    
}