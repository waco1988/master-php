<?php

require_once 'autoload.php';

//require_once 'classes/usuario.php';
//require_once 'classes/categoria.php';
//require_once 'classes/entrada.php';

//$usuario = new Usuario();
//echo $usuario->nombre;
//echo "<br/>";
//echo $usuario->email;  
//
//$categoria = new CAtegoria();
//echo "<br/>".$categoria->nombre;

//ESpacios de nombres y paquetes

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->ctegoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    function informacion(){
        echo __NAMESPACE__ ."<br/>";
    }


}



//Obeto principal
$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);
$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

//Objeto otro paquete
//$usuario = new UsuarioAdmin();
//var_dump($usuario);

//Comprobar si existe una clase
$clase = @class_exists('PanelAdministrador\Usuario');

if($clase){
    echo "<h1>La clase si existe</h1>";
}else{
    echo "<h1>La clase no existe</h1>";
}