<?php

interface ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detertarUSB();
    
}

class iMAc implements ordenador {
    private $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender(){
        ;
    }
    
    public function apagar() {
        ;
    }
    
    public function  reiniciar(){
        ;
    }
    
    public function desfragmentar() {
        ;
    }
    
    public function detertarUSB() {
        ;
    }


}

$maquintos = new iMAc();
$maquintos->setModelo("Macbook Pro 2019");
echo $maquintos->getModelo();

