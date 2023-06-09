<?php


require_once __DIR__ . '/Product.php';

class Giochi extends Product {

    function __construct(public Category $category, public string $name, public string $description, public float $price, public string $caratteristiche, public string $dimensioni){

        parent::__construct($category, $name, $description, $price);
        
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

    function getCaratteristiche(){
        return $this->caratteristiche;
    }

    function getDimensioni(){
        return $this->dimensioni;
    }
}


?>