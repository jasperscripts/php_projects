<?php

class Model_Items extends Model_Db {

    function __construct(
        private $category='',
        private $name='',
        private $details='',
        private $price='',
        private $fname='',
    ) {
        parent::__construct();    
    }

    function save() {
        $sql = "INSERT INTO items VALUES('',?,?,?,?,?)";
        
        $options = [
            $this->category,
            $this->name,
            $this->details,
            $this->price,
            $this->fname,
        ];

        $this->prepared($sql, $options);
    }

}
