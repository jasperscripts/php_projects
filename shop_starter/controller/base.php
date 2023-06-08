<?php

abstract class Controller_Base {
    protected $message;
    protected $file;

    public function __construct() {
        $obj = new ReflectionClass($this);
        $this->file = basename($obj->getFileName());
    }

    function run() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->get();
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->post();
        }
        $this->render();
    }

    protected function get() {
        // TO BE DONE BY CHILD CLASS
    }

    protected function post() {
        // TO BE DONE BY CHILD CLASS
    }

    function render() {
        include_once("./view/$this->file");
    }
}