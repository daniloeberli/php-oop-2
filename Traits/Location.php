<?php

trait Location {
    private $city;
    private $country;
    private $road;


    public function getCity(){
        return $this->city;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getRoad(){
        return $this->road;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function setRoad($road){
        $this->road = $road;
    }
}



?>