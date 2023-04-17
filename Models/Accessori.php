<?php

require_once __DIR__ . '/Product.php';

class Accessori extends Product{

    function __construct(public Category $category, public string $name, public string $description, public float $price, public string $materiale, public string $dimensioni){

        parent::__construct($category, $name, $description, $price);

        $this->materiale = $materiale;    
        $this->dimensioni = $dimensioni;    
        
    }
}


?>