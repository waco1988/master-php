<?php

/* 
 *Ejercicio 4
 * 
 * Crear un script en PHP que tenga 4 variables:
 * *Array
 * *String
 * *Int
 * *Booleana
 * 
 * y que imprima un mensaje según el tipo de variable que sea. 
 */

$juegos = ['Mario Bros', 'Road Runer', 'Tank', 'Galaga', 'Pac-Man'];

$contenido = "Esta es una variable que contiene una cadena de caracteres";

$celular = 3;

$opcion = true;
/*
echo gettype($juegos)."<br/>";
echo gettype($contenido)."<br/>";
echo gettype($celular)."<br/>";
echo gettype($opcion)."<br/>";
*/

if(is_array($juegos)){
    echo "<h1>".gettype($juegos)."</h1><br/>";
    foreach ($juegos as $juego){
        echo $juego."<br/>";
    }
}

if(is_string($contenido)){
    echo "<h1>".gettype($contenido)."</h1><br/>";
    echo $contenido."<br/>";
}

if(is_integer($celular)){
    echo "<h1>".gettype($celular)."</h1><br/>";
    echo $celular."<br/>";
}

if(is_bool($opcion)){
    echo "<h1>".gettype($opcion)."</h1><br/>";
    echo $opcion."<br/>";
}