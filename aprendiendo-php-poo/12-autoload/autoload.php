<?php

function app_autoload($class){
    require_once 'classes/'.$class.'.php';
    
}

spl_autoload_register('app_autoload');