<?php


Class Food extends Product{

    public $ingredient, $expiration, $weight;
    
    function __construct($name, $price, Category $category, $ingredient, $expiration, $weight){
        // parent constructor
        parent::__construct($name, $price, $category);

        $this->ingredient = $ingredient;
        $this->expiration = $expiration;
        $this->weight = $weight;
    }


}