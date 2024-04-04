<?php

Class Product extends Category{

    public $name;
    public $price;
    public $image;
    public Category $category;

    function __construct($name, $price, Category $category){

        $this->name=$name;
        $this->price=$price;
        $this->category = $category;
        
    }

}