<?php
require_once "Traits/Numerable.php";

Class Toy extends Product{

    use Numerable;

    public $material;

    function __construct($name, Category $category, $price, $material){
        // parent constructor
        parent::__construct($name, $category);

        if(is_numeric($price)){
            $this->price=$price;
        }else{
            throw new Exception("ERRORE: il valore inserito non è numerico");
            // echo $price;
        }

        $this->material = $material;
    }
}