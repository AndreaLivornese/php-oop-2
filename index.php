
<?php 
require_once "./Model/Category.php";
require_once "./Model/Product.php";

$dogCategory= new Category("Cane","fa-dog");
$catCategory= new Category("Gatto","fa-cat");

$newProduct= new Product("Palla",2.5, $dogCategory);

var_dump($newProduct);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>