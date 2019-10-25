<?php

$error = 'faltan_valores';

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && 
   !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = "ok";
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $email=$_POST['email'];
    
    
    $pass=$_POST['pass'];
    
    //Validar el nombre
    if(!is_string($nombre) || !preg_match("/[0-9]/", $nombre)){
        $error='nombre';
    }
    
    //Validar el apellido
    if(!is_string($apellido) || !preg_match("/[0-9]/", $apellido)){
        $error='apellido';
    }
    
    //Validar edad
    if(!is_int($edad) || filter_var($edad, FILTER_VALIDATE_INT)){
        $error='edad';
    }
    
    //Validar email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error='email';
    }
    
    //Validar password
    if(empty($pass) || strlen($pass)<5){
        $error='pass';
    }
    
    
}else{
    $error= 'faltan_valores';
}

if($error != 'ok'){
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <tittle>Validacion de Formularios</tittle>
    </head>
    
    <body>
        <h1>Datos Validados Correctamente </h1>
        <?php if($error=='ok'):?>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>