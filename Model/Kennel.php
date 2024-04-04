<?php
require_once "Traits/Numerable.php";

Class Kennel extends Product{
    use Numerable;

    public $size, $material, $color;

    function __construct($name, Category $category, $price, $size, $material, $color){
        parent:: __construct($name,$category);

        if(is_numeric($price)){
            $this->price=$price;
        }else{
            throw new Exception("ERRORE: il valore inserito non è numerico");
            // echo $price;
        }
        $this->size=$size;
        $this->material = $material;
        $this->color=$color;
    }
}