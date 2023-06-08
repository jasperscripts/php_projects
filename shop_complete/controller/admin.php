<?php

class Controller_Admin extends Controller_Base {
    protected $categories=[];
    protected $items=[];

    public function get() {
        $m = new Model_Items();
        $this->items = $m->get();

        $cat = new Model_Category();
        $this->categories = $cat->get();
    }
    public function post() {
        $name    = trim($_POST['name']);
        $details = trim($_POST['details']);
        $price   = trim($_POST['price']);
        $cat     = trim($_POST['category']);

        // File process
        $f = new Model_File($_FILES['item_image']);
        $fname = $f->upload();

        $m = new Model_Items($cat, $name, $details, $price, $fname);
        $m->save();

        $this->get();
    }
}