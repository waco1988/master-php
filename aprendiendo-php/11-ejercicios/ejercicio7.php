<?php

/* 
 * Ejercicio 5
 * 
 * Hacer un proframa que muestre todos los números impares entre 2 números que nos
 * lleguen por la URL ($_GET)
 */

if (isset($_GET['numero1'])&& isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
     echo "<h1>Los numeros impares que hay entre el $numero1 y el $numero2 son: </h1>";
        if ($numero1 < $numero2){ 
             for($i = $numero1; $i<=$numero2; $i++){
                 
                 if ($i%2!= 0){
                      echo "$i es un número impar<br/>";
                 }else{
                     echo "$i es un número par<br/>";
                 }
       
            
              }
         }else{
        echo "Para realizar la operación el número 1 debe ser menor al número 2, gracias";
        }
}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}



