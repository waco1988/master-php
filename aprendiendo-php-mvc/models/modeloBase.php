<?php

require_once 'config/dataBase.php';

Class ModeloBase{
    
    public $db;
    
    public function __construct() {
        $this->db = dataBase::conectar();
    }
    
    public function conseguirTodos($tabla){
        $query = $this->db->query("select * from $tabla order by id desc");
        return $query;
    }
}   
