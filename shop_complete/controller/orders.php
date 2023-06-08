<?php

class Controller_Orders extends Controller_Base {
    protected $orders;

    public function get() {
        $m = new Model_Orders();
        $this->orders = $m->getByUserId($_SESSION['userid']);
    }
}
