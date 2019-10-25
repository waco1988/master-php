<?php

/* 
 * Ejercicio 5
 * 
 * Crear un array con el contenido de la tabla:
 * 
 * Accion       Aventura            Deportes
 * GTA          ASSASINS            FIFA 19
 * COD          CRASH               PES 19
 * PUGB         PRINCE OF PERSIA    MOTO GP 19
 * 
 * Cada fila debe ir en un fichero separado (includes).  
 */

$tabla = array(
    "ACCION"=>array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA"=>array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES"=>array("Fifa 19", "PES 19", "Moto GP 19")
);

$categorias = array_keys($tabla);

?>

<table border="1">
    
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primerafila.php'; ?>
    <?php require_once 'ejercicio5/segundafila.php'; ?>
    <?php require_once 'ejercicio5/tercerafila.php'; ?>
    
    
</table>