<?php

Class NotaController{
    
    public function listar(){
        
        //Modelo
        require_once 'models/nota.php';
        
        //Logica accion del controlador
        $nota = new Nota();
        
        
        $notas = $nota->conseguirTodos('notas');
        
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear(){
        //Modelo
        require_once 'models/nota.php';
        
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        
        $guardar = $nota->guardar();
        //para revisar un posible error en esta parte del codigo
//        echo $nota->db->error;
//        die();
        
        header("Location:index.php?controller=Nota&action=listar");
    }
    
    public function borrar(){
        
    }
}

