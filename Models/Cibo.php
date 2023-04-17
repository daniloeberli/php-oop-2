<?php

require_once __DIR__ . '/Product.php';

class Cibo extends Product {

    function __construct(public Category $category, public string $name, public string $description, public float $price, public float $weight, public string $bio){

        parent::__construct($category, $name, $description, $price);

        $this->weight = $weight;
        $this->bio = $bio;
    }

    function getWeight(){
        return $this->weight;
    }

    function getBio(){
        return $this->bio;
    }
}


?>