<?php

/*
 * Funciones:
 * 
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como 
 * queramos.
 * 
 * function nombre_de_mi_funcion ($parametros){
 *  //BLOQUE / CONJUNTO DE INSTRUCCIONES
 * }
 * 
 * nombre_de_mi_funcion ($mi_parametro);
 * nombre_de_mi_funcion ($mi_parametro); 
 */

//Ejemplo1
/*
function muestra_nombres(){
    echo "William Cobaleda<br/>";
    echo "William Cobaleda<br/>";
    echo "William Cobaleda<br/>";
    echo "<hr/>";
}

//Invocar función

muestra_nombres();
muestra_nombres();
muestra_nombres();
*/

//Ejemplo2
/*
function tabla ($numero){
    
    echo "<h3> Tabla de multiplicar del número $numero</h3>";
    for ($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
   
    }
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}


for ($i = 0; $i <= 10; $i++){
    tabla($i);
}
*/

//Ejemplo3
/*
function calculadora ($numero1, $numero2, $negrita = false){
    $suma= $numero1 + $numero2;
    $resta= $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division= $numero1 / $numero2;
    
    $cadena_texto="";
    
    if ($negrita){
        $cadena_texto .= "<h1/>";
    }
    $cadena_texto .= "Suma = $suma<br/>";
    $cadena_texto .= "Resta = $resta<br/>";
    $cadena_texto .= "Multiplicacion = $multiplicacion<br/>";
    $cadena_texto .= "División = $division<br/>";
    
    if ($negrita){
        $cadena_texto .= "</h1>";
    }
    
    return $cadena_texto;
}

echo calculadora (5, 20);
*/

//Ejemplo4

function get_nombre ($nombre){
    $texto = "El nombre es: $nombre";
    
    return $texto;
}

function get_apellido ($apellido){
   $texto = "Los apellidos son: $apellido";
   
   return $texto;
}

Function devuelve_nombre ($nombre, $apellido){
    $texto = get_nombre ($nombre)
            ."<br/>".
            get_apellido($apellido);
    
    return $texto;
}

echo devuelve_nombre("William", "Cobaleda");
 