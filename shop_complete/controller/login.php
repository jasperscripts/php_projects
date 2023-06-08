<?php

class Controller_Login  extends Controller_Base {
    public function post() {
        $uname    = trim($_POST['username']);
        $password = $_POST['password'];

        $model = new Model_Users($uname, $password);
        $userid = $model->auth();

        if($userid) {
            $_SESSION['username'] = $uname;
            $_SESSION['userid']   = $userid;
            header('location: index.php');
        } else {
            $this->message = "User and/or Password does not match";
        }
    }
}
