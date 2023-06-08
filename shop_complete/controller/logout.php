<?php


class Controller_Logout extends Controller_Base {

    function get() {
        session_destroy();
        header('location: login.php');
    }
}