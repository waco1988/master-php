<?php

/* 
 * Variables Locales
 * 
 * Son las que se definen dentro de una función y no pueden ser usadas fuera de
 * la función, solo estan disponibles dentro. a no ser que hagamos un return.
 * 
 * Variables Globales
 * 
 * Son las que se declaran fuera de una función y estan disponibles dentro y 
 * fuera de las funciones
 */

//Variable Global
/*
$frase = "Ni los genios son tan genios, ni lo mediocres tan mediocres";

function hola_mundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    
    return $year;
    
}

echo hola_mundo();
*/

//Funciones Variables
function buenasDias(){
    return "<h1>Hola Buenos días</h1>";
}

function buenasTardes(){
    return "<h1>Hola buenas tardes</h1>";
}

function buenasNoches(){
    return "<h1>Hola buenas noches</h1>";
}


$horario="Tardes";

$mi_funcion="buenas".$horario;

echo $mi_funcion();