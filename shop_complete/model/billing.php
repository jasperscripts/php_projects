<?php

class Model_Billing extends Model_Db {
    function __construct(private $firstname,
                        private $lastname,
                        private $address,
                        private $city,
                        private $zip,
                        private $phone,
                        private $userid,
                        private $orderid,
                        private $status) {
        parent::__construct();
    }

    function save() {
        $sql = "INSERT INTO billing VALUES('',?,?,?,?,?,?,?,?,?,?)";
        $options = [
            $this->orderid,
            $this->userid,
            $this->firstname,
            $this->lastname,
            $this->address,
            $this->city,
            $this->zip,
            $this->phone,
            date('Y-m-d H:i:s'),
            $this->status,
        ];

        $this->prepared($sql, $options);
    }


}