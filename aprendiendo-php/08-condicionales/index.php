<?php

    /*Condicional If
     if(condicion){
        instruciiones
     }else{
        otras instrucciones
     }
     * 
     * 
     Operadores de Comparación
     == -> Igual
     === -> Identico
     != -> Diferente
     <> ->Diferente
     !== ->No identico
     < -> Menor que
     > -> Mayor que
     <= -> Menor o igual que
     >= -> Mayor o igual que
     * 
     * 
     Operadores Logicos
     && -> AND -> Y
     || -> OR -> O
     ! -> NOT -> NO
     and, or
     */
//Ejemplo1
$color = "amarillo";

if($color == "rojo"){
    echo "El color SI es Rojo";
}else{
    echo "El color No es Rojo";
}
echo "<br>";
//Ejemplo2
$year = 2019;

if ($year == 2009){
    echo "Estamos en el 2019";
}else{
    echo "No estamos en el 2019";
    
}

//Ejemplo3
$edad = 20;
$mayoria_edad = 18;
$nombre ="William Cobaleda";
$ciudad = "Barcelona";
$continente = "America";

if($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if($continente=="Europa"){
        echo "<h2> y es de $ciudad</h2>";
        
    }else{
        echo "No es Europeo";
    }
}else{
    echo "<h2>$nombre NO es mayor de edad</h2>";
}

//Ejemplo4
echo '<hr/>';
$dia = 5;
/*
if($dia == 1){
    echo "Es Lunes";
   
}else{
    if($dia == 2){
        echo "Es Martes";
    }else{
        if($dia == 3){
            echo "Es Miercoles";
        }else{
            if($dia == 4){
                echo "Es Jueves";
            }else{
                if($dia == 5){
                    echo "Es Viernes";
                    
                }else{
                    if($dia == 6){
                        echo "Es Sábado";
                    }else{
                        echo "Es Domingo";
                    }
                }
            }
        }
    }
}

*/
   
if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia ==3){
    echo "Miercoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia == 5){
    echo "Viernes";
}elseif($dia == 6){
    echo "Sábado";
}elseif($dia == 7){
    echo "Domingo";
}
echo '<hr/>';

//Switch
$dia = 8;

switch ($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
    default :
        echo 'Revisar el número ingresado<co';
}

echo '<hr/>';
//Ejemplo5

$edad1 = 17;
$edad2 = 98;
$edad_oficial = 16;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No puede trabajar";
}

echo "<hr/>";

$pais = "Usa";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este país se habla español";
}else{
    echo "No se habla español";
}

echo '<hr/>';
//Goto
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";

marca:
    echo "<h1>Me he saltado 4 echos</h1>";

