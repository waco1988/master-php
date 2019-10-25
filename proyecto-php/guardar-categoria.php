<?php

if(isset($_POST)){
   
    //Conexion a la base de datos
    require_once 'includes/conexion.php';
    
    //El mysqli_real_escape_string se usa para que cualquiera que sea los datos ingresados lo reconozca todo como un String
    //y hací evitar que vulneren de la seguridad intoduciento script de sql que permita ingresar sin autorización 
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
   
    //Array de errores 
    $errores = array();
    
    //VAlidar los datos antes de guardarlos en la base de datos
    //Validar como nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){    
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    
    if(count($errores) == 0){
        $sql = "INSERT INTO categorias VALUES (NULL, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
    
   
}

header('Location: index.php');

?>