<?php
require_once "Traits/Numerable.php";

Class Food extends Product{

    use Numerable;

    public $ingredient, $expiration, $weight;
    
    function __construct($name, Category $category, $price, $ingredient, $expiration, $weight){
        // parent constructor
        parent::__construct($name, $category);

        if(is_numeric($price)){
            $this->price=$price;
        }else{
            throw new Exception("ERRORE: il valore inserito non è numerico");
            // echo $price;
        }
        $this->ingredient = $ingredient;
        $this->expiration = $expiration;
        $this->weight = $weight;
    }


}