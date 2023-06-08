<?php


class Model_File {
    function __construct(private $file) {}

    function upload() {
        $path = './images/';

        $name = $this->file['name'];
        $path = $path . $name;
        move_uploaded_file($this->file['tmp_name'],$path);
        return $path;
    }
}