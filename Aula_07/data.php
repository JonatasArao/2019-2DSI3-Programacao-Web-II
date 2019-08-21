<?php
// MANIPULAÇÃO DE DATAS
// definindo o fuso horario
date_default_timezone_set('America/Sao_Paulo');

// funcao date() serve para retornar uma data
// segundo o formato escolhido
// echo date('d/m/y H:m:s');

// $proxima_semana = time() + (60*60*24*7);
// $hora = date('d/m/y',$proxima_semana);
// ou
$hora = date('d/m/y', strtotime('+1 week'));


echo $hora;