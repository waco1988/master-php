<?php

/* 
 * Ejercicio 6
 * 
 * Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
 */
$cabacera = 0;
$reultado = 0;

echo "<table border='1'<tr>"; //Inico de la Tabla de HTML

echo "<tr>"; //Inicio de la fila 1 de celdas

    for($cabacera = 1; $cabacera <= 10; $cabacera++){
        echo "<td>Tabla del $cabacera</td>";
        
        
    }

echo "</tr>"; //Cierre fila 1 de celdas

echo "<tr>";//Inicio de la fila 2 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>";
         
         for ($x = 1; $x <= 10; $x++){
             echo"$i x $x = ".($i*$x)."<br/>";
         }
    }
echo "</tr>";//Fin de la fila 2 de celdas
/*
echo "<tr>";//Inicio de la fila 3 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*2)."</td>";
    }
echo "</tr>";//Fin de la fila 3 de celdas

echo "<tr>";//Inicio de la fila 4 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*3)."</td>";
    }
echo "</tr>";//Fin de la fila 4 de celdas

echo "<tr>";//Inicio de la fila 5 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*4)."</td>";
    }
echo "</tr>";//Fin de la fila 5 de celdas

echo "<tr>";//Inicio de la fila 6 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*5)."</td>";
    }
echo "</tr>";//Fin de la fila 6 de celdas

echo "<tr>";//Inicio de la fila 7 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*6)."</td>";
    }
echo "</tr>";//Fin de la fila 7 de celdas

echo "<tr>";//Inicio de la fila 8 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*7)."</td>";
    }
echo "</tr>";//Fin de la fila 8 de celdas

echo "<tr>";//Inicio de la fila 9 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*8)."</td>";
    }
echo "</tr>";//Fin de la fila 9 de celdas

echo "<tr>";//Inicio de la fila 10 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*9)."</td>";
    }
echo "</tr>";//Fin de la fila 10 de celdas

echo "<tr>";//Inicio de la fila 11 de celdas
    for ($i = 1; $i <= 10; $i++){
       
         echo "<td>".($i*10)."</td>";
    }
echo "</tr>";//Fin de la fila 11 de celdas

*/

echo "</table>"; //Finde la Tabla

