<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre  es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $año;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";

$persona = new Persona();
$persona->nombre = "Antonio";

$videoJuego = new VideoJuego();
$videoJuego->nombre = "GTA 4";

$coche->mostrarNombre();
$persona->mostrarNombre();
$videoJuego->mostrarNombre();