<?php
require_once 'Product.php';
$book = new Product();

$book->name = "php";
$book->price = "100";
$book->brand = "OOP";
$book->image = "php.jpeg";
$book->description = "description for php book";

$tshirt = new Product();

$tshirt->name = "splash";
$tshirt->price = "200";
$tshirt->brand = "splash";
$tshirt->image = "tshirt.jpg"; 
$tshirt->description = "description for splash tshirt";

$laptop = new Product();

$laptop->name = "dell";
$laptop->price = "300";
$laptop->brand = "dell";
$laptop->image = "dell.jpg"; 
$laptop->description = "description for dell laptop";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="uploads/<?= $book->image;?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $book->name;?></h5>
      <p class="card-text"><?= $book->description; ?></p>
      <p class="card-text"><small class="text-muted"><?= $book->brand;?></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="uploads/<?= $tshirt->image;?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $tshirt->name;?></h5>
      <p class="card-text"><?= $tshirt->description; ?></p>
      <p class="card-text"><small class="text-muted"><?= $tshirt->brand;?></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="uploads/<?= $laptop->image;?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $laptop->name;?></h5>
      <p class="card-text"><?= $laptop->description; ?></p>
      <p class="card-text"><small class="text-muted"><?= $laptop->brand;?></small></p>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>