<?php
require_once __DIR__ . '/Category.php'; 

class Product {
    
    function __construct(/*public Category $category,*/ public string $name, public string $description, public float $price){
        //$this-->category = $category;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    // function getCategory(){
    //     return $this->category;
    // }

    function getName(){
        return $this->name;
    }

    function getDescription(){
        return $this->description;
    }

    function getPrice(){
        return $this->price;
    }
}

//$prodotto = new Product('Spirulino','descrizione accurata', 32.5);

//var_dump($prodotto);

?>