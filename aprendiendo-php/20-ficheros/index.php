<?php

/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");


//Leer archivo
while(!feof($archivo)){
    
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

//Escribir
fwrite($archivo, "<br/>Nueva linea ingresada desde el php.index");

//Cerrar archivo
fclose($archivo);

//Copiar archivos o ficheros
copy('fichero_texto.txt', 'fichero_copiado.txt') or die ('Error al copiar');

//Renombar ficheros
rename('fichero_copiado.txt', 'cambio _nombre_archivo.txt');

//eliminar archivo
unlink('cambio _nombre_archivo.txt') or die ('Error al borrar');
*/

//Vaerificar si un archivo existe
if(file_exists("fichero_texto.txt")){
    echo "El archivo si existe";
}else{
    echo "El fichero no existe";
}