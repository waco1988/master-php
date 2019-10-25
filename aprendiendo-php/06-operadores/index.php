<?php

//Operadores aritméticos

$numero1 = 55;
$numero2 = 33;

echo 'suma: '.($numero1+$numero2).'<br/>';
echo 'resta: '.($numero1-$numero2).'<br/>';
echo 'multiplicación: '.($numero1*$numero2).'<br/>';
echo 'división: '.($numero1/$numero2).'<br/>';
echo 'resto: '.($numero1%$numero2).'<br/>';

//Operadores de incremento y decremento
$year = 2019;

//Incremento
//$year = $year + 1;
$year++;



//Decremento
//$year = $year - 1;
  $year--;
 


//Pre-incremento
//$year = 1 + $year;
++$year;
 
//Pre-decremento
//$year = 1 - $year;
--$year;
echo "<h1>$year</h1>";

//Operadores de asignación
$edad = 55;

echo $edad.'<br>';

//$edad = $edad + 5;
echo ($edad+=5);