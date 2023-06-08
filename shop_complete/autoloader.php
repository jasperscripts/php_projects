<?php

// PHP function
spl_autoload_register(function($class){
    $path = str_replace('_', '/', $class);
    include_once($path .'.php');
});