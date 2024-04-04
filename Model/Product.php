<?php

Class Product{

    public $name;
    public $price;
    public $image;
    public $category;

    function __construct($name, $price, $category){

        $this->name=$name;
        $this->price=$price;
        $this->category = $category;
        
    }

}