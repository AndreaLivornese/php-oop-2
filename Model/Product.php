<?php

require_once "Food.php";
require_once "Toy.php";
require_once "Kennel.php";

Class Product {

    public $name;
    public $price;
    public $image;
    public Category $category;

    function __construct($name, $price, Category $category){

        $this->name=$name;
        $this->price=$price;
        $this->category = $category;
        
    }


    function setImage($url){
        $this->image = $url;
    }

}