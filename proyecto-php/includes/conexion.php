<?php

//Conexion
$host="localhost";
$user="root";
$password="";
$database="blog_master";

//Conexión
$db=mysqli_connect($host, $user, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}
        
?>
