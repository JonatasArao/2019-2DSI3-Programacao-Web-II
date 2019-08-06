<?php
$fi0 = 0;
$fi1 = 1;
$i = 0;

for($i = 0; $i <= 9; $i++){
    echo $fi0."<br>".$fi1."<br>";
    $fi0 += $fi1;
    $fi1 += $fi0;
}

echo "<hr>";

$fi0 = 0;
$fi1 = 1;
$i = 0;

while($i <= 9)
{
    echo $fi0."<br>".$fi1."<br>";
    $fi0 += $fi1;
    $fi1 += $fi0;
    $i++;
}

echo "<hr>";

$fi0 = 0;
$fi1 = 1;
$i = 0;

do{
    echo $fi0."<br>".$fi1."<br>";
    $fi0 += $fi1;
    $fi1 += $fi0;
    $i++;
}while($i <= 9);