<?php

class Controller_Index extends Controller_Base {
    protected $items=[];
     
    public function get() {

        if(isset($_GET['item'])) {
            // Add to Cart Here

            $m = new Model_Orders($_GET['item'], $_SESSION['userid']);
            $m->save();
            $this->message = "Successfully Added to Cart";
        }
        $m = new Model_Items();
        $this->items = $m->get();
    }
}
