<?php

//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//Comprobas si la conexión es correcta
if(mysqli_connect_errno()){
    echo "La conexión a la base de datos MySQL ha fallado: ".mysqli_connect_error();
}else{
    echo "Conexión realizada correctamente!!".'<br/>';
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM NOTAS");

//Para ver el resultado de un query en una array y para ver todos los resultados se usa el ciclo while

while ($nota = mysqli_fetch_assoc($query)){
    
    //var_dump($nota);
    echo "<h2>".$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br/>';
}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";

if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
}else{
    echo "Error: ".mysqli_error($conexion);
}


