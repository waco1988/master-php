<?php

/* 
 Ejercicio 3
 * 
 Escribir un programa que imprima por pantalla los caudrados (un númeo
 multipliado por si mismo) de los 40 primeros numeros naturales.
 * 
 UTilizae bucle whilw
 */

/*
while ($numero <=40){
    $cuadrado=($numero*$numero);
    echo "El cuadrado de $numero es $cuadrado<br/>";
    $numero++;
}
*/

for ($numero = 0; $numero<=40; $numero++){
    $cuadrado = ($numero*$numero);
    echo "El cuadrado de $numero es $cuadrado<br/>";
}