<?php

Class Toy extends Product{

    public $material;

    function __construct($name, $price, Category $category, $material){
        // parent constructor
        parent::__construct($name, $price, $category);

        $this->material = $material;
    }
}