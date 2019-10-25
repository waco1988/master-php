<?php

/* 
 * Ejercicio 2
 * 
 * Escribir un programa con PHP que añada valores a un array mientras que su
 * longitud sea menor a 120 y luego mostrarlo en pantalla
 */

$coleccion = array();

for ($i=0; $i<120; $i++){
    array_push($coleccion, "Elemento - ".$i);
}

foreach ($coleccion as $cole){
    echo $cole."<br/>";
}

echo $coleccion[5];