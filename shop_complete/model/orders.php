<?php

class Model_Orders extends Model_Db {

    function __construct(
        private $item='',
        private $user='',
    ) {
        parent::__construct();    
    }

    
    function getByUserId($userid) {
        $sql = "SELECT o.*, i.name, i.details, i.price, i.image FROM orders o
                INNER JOIN items i on i.id=o.item_id
                WHERE user_id=? and status=1";
        
        $result = $this->prepared($sql, [$userid]);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function save() {
        $orders = $this->getByUserId($this->user);
        $count = 0;
        $orderId = 0; 

        foreach($orders as $order) {
            if($order['item_id'] == $this->item) {
                $count   = $order['count'];
                $count++;
                $orderId = $order['id'];
                break;
            }
        }

        if (!$count) {
            $sql = "INSERT INTO orders VALUES('',?,?,?,?,?)";
        
            $options = [
                1,
                $this->item,
                $this->user,
                date('Y-m-d H:i:s'),
                1
            ];
        } else {
            $sql = "UPDATE orders SET count=? where id=?";

            $options = [
                $count,
                $orderId,
            ];
        }

        $this->prepared($sql, $options);
    }

    function setOrderStatus($id, $status) {
        $sql = "UPDATE orders SET status=? where id=?";

        $options = [
            $status,
            $id,
        ];

        $this->prepared($sql, $options);
    }
}