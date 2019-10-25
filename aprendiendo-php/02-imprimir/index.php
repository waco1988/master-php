<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - victorroblesweb.es</h1>
        
        <?="Bienvenido al curso mas grande PHP"?>
        
        <?php
            //Titular de la sección
            echo '<h3>Listado de videojuegos:</h3>';
            
            /*ESta es una lista de juegos*/
            echo "<ul>"
                 ."<li>GTA</li>"
                 ."<li>Fifa</li>"
                 ."<li>Mario Bros</li>"
                 ."</ul>";
            
            //Parrafo explicativo
            echo '<p>Esta es toda'.'-'.'lista de juegos</p>';

        ?>
    </body>
</html>


