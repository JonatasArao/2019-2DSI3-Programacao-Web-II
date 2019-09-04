<?php

include_once('conn.php');

$sql = 'SELECT * FROM agenda';

$consulta = $GLOBALS['conn']->query($sql);

while($contato = $consulta->fetch_array())
{
    echo ' 
    <div class="col-10 mt-2">
        <h3> '.$contato['nome'].'</h3>
        <p><i class="fas fa-phone"></i> '.$contato['telefone'].'<br><i class="far fa-envelope"></i> '.$contato['email'].'</p>
    </div>
    <div class="col-2 mt-2 pt-2 text-right">
        <h4><i class="far fa-edit editar" id="+o.id+"></i> <i class="fa fa-trash excluir" id="+o.id+"></i></h4>
    </div>
    ';
    
}