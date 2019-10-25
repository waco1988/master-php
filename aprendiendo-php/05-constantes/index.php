<?php

//Constantes
// es un contenedor de información que no puede variar

define('nombre','William Cobaleda');
define('web', 'williamcobaleda.com' );



echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//variable
$web = "williamcobaleda.co/academy";
$web = "williamcobaleda.co/cursos";
                            
echo '<h1>'.$web.'</h1>';

//Constantes predefinidas

echo PHP_VERSION;