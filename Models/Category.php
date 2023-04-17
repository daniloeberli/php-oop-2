<?php

class Category{

    public string $category_type;

    function __construct($name)
    {
        $this->category_type = $name;
    }

    function getcategory(){
        return $this->category_type;
    }
}

?>