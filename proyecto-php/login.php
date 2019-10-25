<?php

//Iniciar la sesión y la conexiíon con la base de datos
require_once 'includes/conexion.php';

//Recoger datos del formulario
if(isset($_POST)){
    
    //Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
                
    }
    
    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    //Consulta paa comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);
        
        if(verify){
            // Utilizar una sesión para guardaar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
              
        }else{
            //Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
            
        }
    }else{
        // Mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    }
}

// Redirigir al index.php
header('Location: index.php');





?>