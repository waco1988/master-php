<?php

/* 
 * Sesión
 * 
 * Almacenar y persistir datos del usuario mientras que navega en un sitio web
 * hasta que cierra sesión o cierra el navegador
 */

//Iniciar sesión
session_start();

//Variable normal
$variable_normal="Soy una cadena de texto";

//Variable de sesión
$_SESSION ['variable_persistente']="Hola soy una sesión activa";

echo $variable_normal."<br/>";

echo $_SESSION ['variable_persistente'];

