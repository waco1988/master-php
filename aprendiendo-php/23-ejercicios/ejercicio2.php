<?php

/*
 * Ejercicio 2
 * 1. Una funciòn
 * 2. Validar un e-mail con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar el resultado.
 */

function validar_email($email){
    $status = "No valido.";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Válido.";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validar_email($_GET["email"]);
}else{
    echo "Pasa por get un email...";
}

