<?php

namespace MisClases;

class Usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "William Cobaleda";
        $this->email = "william@cobaleda.com";
    }
}
