<?php

namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Maribel Gomez";
        $this->email = "maribel@gomez.com";
    }
}
