<?php

require_once "Food.php";
require_once "Toy.php";
require_once "Kennel.php";


Class Product {

    public $name;
    public $image;
    public Category $category;

    function __construct($name, Category $category){

        $this->name=$name;
        $this->category = $category;
        
    }


    function setImage($url){
        $this->image = $url;
    }

}