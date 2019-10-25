<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];

$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "imagel/git"){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    header("Refresh: 5; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";
    
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Formato de imagén no valido, intente nuevamente</h1>";
}