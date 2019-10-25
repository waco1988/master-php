<?php

/*
 * Array:
 * 
 * Un arrays es una colección o conjunto de datos/valores, bajo un unico nombre
 * para acceder a esos valores podemos usar un indice númerico o alfanúmerico 
 */
/*
$pelicula= 'Batman';

$peliculas = array('Batman', 'Spiderman', 'El Señor de los Anillos');

$cantantes = ['2pac', 'Drake', 'Jenifer Lopez'];

//Recorrer el array con el ciclo For
echo '<h1>Listado de Peliculas</h1>';

echo '<ul>';

for($i=0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

//Recorrer el array con el ciclo Foreach
echo '<h1>Listado de Cantantes</h1>';

echo '<ul>';

foreach ($cantantes as $cantante){
    echo '<li>'.$cantante.'</li>';
}

echo '</ul>';

//Array asociativo
$personas = array(
    'nombre'=>'William',
    'apellido'=>'Cobaleda',
    'web'=>'Williamco.com'
);

echo $personas['nombre'];
*/
//Arrays multidimensionales

$contactos = array(
    array(
        'nombre'=>'William Cobaleda',
        'email'=>'cobaleda1988@hotmail.com'
    ),
    array(
        'nombre'=>'Maribel Gomez',
        'email'=>'mgomez@gmail.com'
    ),
    array(
        'nombre'=>'Valeria Cobaleda',
        'email'=>'vcobaleda@gmail.com'
    )
);

foreach ($contactos as $contacto) {
    var_dump($contacto['nombre']);
}