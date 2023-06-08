<?php

class Controller_Billing extends Controller_Base {

    function post() {
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $address   = $_POST['address'];
        $city      = $_POST['city'];
        $zip       = $_POST['zip'];
        $phone     = $_POST['phone'];
        $userid    = $_SESSION['userid'];

        $o = new Model_Orders();
        $orders = $o->getByUserId($userid);
        $orderid = $orders[0]['id'];

        // Set all orders as inactive
        foreach($orders as $order) {
            $o->setOrderStatus($order['id'], 0);
        }

        // Set to 0 to indicate this is already paid (Assuming)
        $m = new Model_Billing($firstname,
        $lastname,
        $address,
        $city,
        $zip,
        $phone,
        $userid,
        $orderid,
        0);

        $m->save();
        header('location: thanks.php');
    }
}