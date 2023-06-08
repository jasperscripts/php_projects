<?php

class Controller_Register extends Controller_Base {
    public function post() {
        $uname    = trim($_POST['username']);
        $password = $_POST['password'];
        $email    = trim($_POST['email']);
        $password1 = $_POST['password1'];

        if($password != $password1) {
            $this->message = "Password should match";
        } else {
            $model = new Model_Users($uname, $password, $email);
            $model->save();
            header('location: login.php');
        }
    }
}
