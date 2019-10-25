<?php

/* 
 * Ejercicio 3
 * 
 * Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla
 * con texto en minusculas y mostrarlo en mayusculas y negrita
 */

$variable = "";

if(empty($variable)){
    $variable="hola mundo";
    echo "<strong>".strtoupper($variable)."</strong>";
}else{
    echo "La variable ya esta llena,".$variable;
}
