<?php


require_once __DIR__ . '/Product.php';

class Giochi extends Product {

    function __construct(/*public Category $category,*/ public string $name, public string $description, public float $price, public string $caratteristiche, public string $dimensioni){

        parent::__construct(/*$category,*/ $name, $description, $price);
        
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;

    }
}

$gioco1 = new Giochi('palla' , 'description', 25, 'gigante', '10cm x 20cm');

var_dump($gioco1);

?>