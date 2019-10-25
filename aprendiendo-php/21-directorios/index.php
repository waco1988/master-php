<?php

if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
}else{
    "Ya existe la carpeta";
}

//Para borrar carpeta
//rmdir('mi_carpeta');
echo"<hr>";
echo "<h1>Contenido carpeta</h1>";

//Para mostrar el contenido de una carpeta
 
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo !='..'){
            echo $archivo."<br/>";
        }
        
    }
}