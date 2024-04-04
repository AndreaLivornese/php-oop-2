<?php

Class Kennel extends Product{
    public $size, $material, $color;

    function __construct($name, $price, Category $category, $size, $material, $color){
        parent:: __construct($name, $price,$category);

        $this->size=$size;
        $this->material = $material;
        $this->color=$color;
    }
}