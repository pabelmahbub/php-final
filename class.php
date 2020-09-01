<?php

class Hoge
{
    public function __construct() {
        // code...
    }

    public function __destruct() {
        // code...
    }

    public function getData() {
        // code...
    }

    public function setData($value) {
        // code...
    }

    protected function validateData() {
        // code...
    }

    private $data;
    private $counter;
}




class Foo extends Hoge
{
    public function __construct() {
        parent::__construct();
    }
    

    public function __destruct() {
        parent::__destruct();
    }