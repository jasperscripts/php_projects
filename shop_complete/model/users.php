<?php

class Model_Users extends Model_Db {

    function __construct(
        private $username='',
        private $password='',
        private $email=''
    ) {
        parent::__construct();
    }

    function save() {
        $sql = "INSERT INTO users VALUES('',?,?,?)";
        $password = password_hash($this->password, PASSWORD_DEFAULT);
        $options = [
            $this->username,
            $password,
            $this->email,
        ];

        $this->prepared($sql, $options);
    }

    function auth() {
        $sql = "SELECT * FROM users WHERE username=?";
        $options = [
            $this->username,
        ];

        $result = $this->prepared($sql, $options);

        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            if(password_verify($this->password, $row['password'])) {
                return $row['id'];
            }  else {
                return false;
            }
        } 

        return false;
    }

}