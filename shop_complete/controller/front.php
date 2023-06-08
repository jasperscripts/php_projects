<?php

class Controller_Front {
    private $path;
    public function __construct($path){
        $e          = explode('/',$path);
        $this->path = end($e); // "payment.php"
    }

    public function run() {

        $path = $this->path;                 //login.php
        $e    = explode('.',$path);          // [login, php] 
        $c    = ucfirst(strtolower($e[0]));  // Login
        $fc   = "Controller_$c";             // Controller_Login

        if(file_exists("./controller/" . $path)) {
            $c = new $fc();
            $c->run();
        } else {
            echo "Error: Page not found";
        }
    }
}
