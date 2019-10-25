<?php

//Debuggear
$nombre = "William Cobaleda Arenas";
var_dump($nombre);
echo "<br/>";

//Fechas
echo date ('d-M-Y');
echo "<br/>";

//Fecha Formato Unix
echo time();
echo "<br/>";

//Matemáticas
echo "Raiz cuadrado de 10 : ".sqrt(10);
echo "<br/>";

echo "Número aleatorio entre 0 y 1000: ".rand(1, 1000);
echo "<br/>";

echo "Número Pi: ".pi();
echo "<br/>";

echo "Redondear: ".round(7.891234, 2);
echo "<br/>";

//Más funciones generales
echo gettype($nombre);
echo "<br/>";

//Detectar tipado
if (is_string($nombre)){
    echo "Esa variable es un string";
    echo "<br/>";
}

if(!is_float($nombre)){
    echo "La variable: $nombre no es un número con decimales";
    echo "<br/>";
}

//Comprobas si existe una variable
if (isset($nombre)){
    echo "La variable $nombre existe";
    echo "<br/>";
}else{
    echo "La variable no existe";
    echo "<br/>";
}

//Limpiar espacios
$frase = "            mi frase            ";
var_dump(trim($frase));
echo "<br/>";

//Eliminar variables / Indices
$year = 2020;
unset($year);

//Comprobar variable vacia
$texto="";

if (empty($texto)){
    echo "La variable texto esta vacia";
    echo "<br/>";
}else{
    echo "La variable texto tiene contenido";
    echo '<br/>';
}

//Contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);
echo "<br/>";

//Encontrar carácter 
$frase =  "La vida es bella";
echo strpos($frase, "b");
echo "<br/>";

//Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

//Mayusculas y minisculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
echo "<br/>";
