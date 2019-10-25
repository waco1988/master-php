<?php

/*
Bucle While
 * 
Estructura de control que itera o repite la ejecucuón de una serie de
instrucciones tantas veces como sea necesario, en base a una condición 
Que el bucle lleva.
 * 
whiel(condicion){
    bloque de instrucciones
}
 */
$numero = 0;

while($numero <= 100){
    echo $numero;
    if ($numero != 100){
        echo ", ";
    }
    $numero++;
    
}

echo "<hr/>";

//Ejemplo

if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

var_dump($numero);

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;

while ($contador <= 10){
    echo"$numero * $contador = ".($numero*$contador)."<br/>";
    $contador++;
}


echo "<hr/>";
/*
Do While
 * 
do{
    Bloque de instrucciones
}while (condicioin);
*/
$edad = 19;
$contador = 1;

do{
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <= 10);


echo "<hr/>";



