
<?php 
require_once "./Model/Category.php";
require_once "./Model/Product.php";

$dogCategory= new Category("Cane","fa-dog");
$catCategory= new Category("Gatto","fa-cat");

$palla= new Toy("Palla",2.5, $dogCategory,"gomma");
$palla->setImage("./img/palla-giocattolo-per-cani.jpg");

// var_dump($newProduct);

$kennel= new Kennel("Cuccia confort", 50.5, $dogCategory, "big", "legno molto legnoso", "marrone e verde");
$kennel->setImage("./img/cuccia-canejpg.jpg");

// var_dump($newKennel);

$scatoletta = new Food("Scatoletta di pollo", 7.5, $catCategory,"pollo","23/05/2024","medium");
$scatoletta->setImage("./img/scatoletta-di-pollo.jpg");

// var_dump($scatoletta);



$products = [
    $kennel, $palla, $scatoletta
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <div class="container p-4">

    <h1 class="text-center mb-5">ANIMALS SHOP</h1>

        <div class="row row-cols-3">

        <?php

        foreach($products as $product){

        ?>
        
        <div class="card">
            <img src="<?= $product->image?>" class="card-img-top" alt="..." style="height: 200px; object-fit:cover">
            <div class="card-body">
                <h5 class="card-title"><?= $product->name ?></h5>
                <div class="details d-flex justify-content-between">
                    <h6><small><?="€".$product->price ?></small></h6>
                    <i class="fa-solid <?= $product->category->icon?>"></i>
                </div>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
            </div>
        </div>

        <?php
        }
        ?>

        
        </div>

    </div>




<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>