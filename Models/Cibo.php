<?php

require_once __DIR__ . '/Product.php';

class Cibo extends Product {

    function __construct(/*public Category $category,*/ public string $name, public string $description, public float $price, public float $weigth, public string $bio){

        parent::__construct(/*$category,*/ $name, $description, $price);

        $this->weigth = $weigth;
        $this->bio = $bio;
    }
}

$cibo2 = new Cibo('crock1', 'description',23,10.5, 'biologico');

var_dump($cibo2);

?>