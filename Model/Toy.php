<?php

Class Toye extends Product{

    public $material;

    function __construct($name, $price, Category $category, $material){
        // parent constructor
        parent::__construct($name, $price, Category $category);

        $this->material = $material;
    }
}