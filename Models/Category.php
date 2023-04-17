<?php

class Category{

    public string $category_type;

    function __construct($name)
    {
        $this->category_type = $name;
    }

    function get_category(){
        return $this->category_type;
    }
}

?>