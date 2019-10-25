<?php

$cantantes = ['2pac','Drake', 'Jenifer Lopez', 'Alfredo'];
$numeros = [35,25,33,44,88,20,02,145];

//Ordenar un array
asort($cantantes);
var_dump($cantantes);
echo "<br/>";

arsort($cantantes);
var_dump($cantantes);
echo "<br/>";

sort($numeros);
var_dump($numeros);
echo "<br/>";

//Añadir elementos a un array
$cantantes[]="Natos";
var_dump($cantantes);
echo "<br/>";

array_push($cantantes, "Waor");
var_dump($cantantes);
echo "<br/>";

//Para eliminar el ultimo indice
array_pop($cantantes);
unset($cantantes[0]);
echo "<br/>";

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];   
echo "<br/>";

//Dar la vuelta
var_dump (array_reverse($numeros));
echo "<br/>";

//Buscar dentro del array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado); 


