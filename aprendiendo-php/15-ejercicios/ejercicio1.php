<?php

/* 
 * Ejercicio 1 
 * 
 * Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga
 * lo siguiente:
 * 
 * Recorrerlo y mostrarlo
 * Ordenarlo y mostrarlo
 * Mostrar su longitud
 * Buscar algun elemento (buscar por el parametro que me llegue por la url)
 * 
 */

//Funciones
function mostrar_array($numeros){
    $resultado="";
    
    foreach ($numeros as $num) {
        //$resultado = $resultado.$numero."<br/>
        $resultado .=$num."<br/>";
    }
    return $resultado;
}


//Creacion del array
$numeros = [2, 9, 3, 5, 7, 6, 1, 29];
/*
//Ordenar los datos
asort($numeros);

//Mostrar su longitud
echo var_dump($numeros);

//Recorrer y mostrar el array
foreach ($numeros as $num) {
    
    echo "<br>".$num."<br/>";
    
}

$numbus = array_search(9, $numeros);
echo $numbus;
*/


//Recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";

echo mostrar_array($numeros);


//Ordenat y mostrar

echo "<h1>Ordenar y mostrar</h1>";

sort($numeros);

echo mostrar_array($numeros);

//Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";

echo count($numeros);

//Busqeuda en el array
if(isset($_GET['numero'])){

    $busqueda = $_GET['numero'];

    echo "<h1>Busqueda en el array el número $busqueda</h1>";
    $search = array_search($busqueda, $numeros);

    if(!empty($search)){
        echo "<h4>El nuumero existe en el array, en el indice: $search</h4>";
    }else{
        echo "<h4>No existe el numero buscado</h4>";
    }

}



