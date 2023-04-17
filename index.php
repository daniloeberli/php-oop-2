<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Accessori.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Category.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>BoolShop</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                            <h5 class="card-title"><?php echo $product->getName() ?></h5>
                            <h6 class="card-text"><?php echo $product->category->getCategory() ?></h6>
                            <p class="card-text"><?php echo 'Prezzo: ' . $product->getPrice() . '€' ?></p>
                            <p class="card-text"><?php echo 'Descrizione: ' . $product->getDescription() ?></p>
                            <?php if (get_class($product) == 'Cibo') { ?>
                                <p class="card-text"> <?php echo 'Peso netto: ' . $product->getWeight() . 'g' ?></p>
                            <?php } ?>
                            <?php if (get_class($product) == 'Giochi') { ?>
                                <p class="card-text"> <?php echo 'Caratteristiche: ' . $product->getCaratteristiche() ?></p>
                                <p class="card-text"> <?php echo 'Dimensioni' . $product->getDimensioni() ?></p>
                            <?php } ?>
                            <?php if (get_class($product) == 'Accessori') { ?>
                                <p class="card-text"> <?php echo 'Materiale: ' . $product->getMateriale() ?></p>
                                <p class="card-text"> <?php echo 'Dimensioni' . $product->getDimensioni() ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div> <?php } ?>
        </div>
    </div>
</body>

</html>