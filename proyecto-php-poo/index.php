<?php

require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';



if (isset($_GET['controller'])){
    
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    
    echo "La pagina que buscas no existe // error controler";
    exit();
}
if (class_exists ($nombre_controlador)){
    
    $controlador = new $nombre_controlador();
//$controlador->mostrarTodos();
//$controlador->crear();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La pagina que buscas no existe!!!!";
    }

}else{
    
    echo "La pagina que buscas no existe!!!!";
    
}

require_once 'views/layout/footer.php';
