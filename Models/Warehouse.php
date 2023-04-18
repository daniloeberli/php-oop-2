<?php

require_once __DIR__ . '/../Traits/Location.php';

class Warehouse{

    use Location;

    private $logistic_company;
    private int $capacity;


    public function __construct($city,$country,$road,$logistic_company,$capacity){
        $this->setCity($city);
        $this->setCountry($country);
        $this->setRoad($road);
        $this->setLogisticCompany($logistic_company);
        $this->setCapacity($capacity);
    }

    public function getLogisticCompanu(){
        return $this->logistic_company;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setLogisticCompany($logistic_company){
        $this->logistic_company = $logistic_company;
    }

    public function setCapacity($capacity){

        if($capacity<=0){
            throw new Exception('Il magazzino deve almeno contenere qualcosa');
        }
        $this->capacity = $capacity;
    }
}

try{
    $magazzino = new Warehouse('torino','italia','bella via','fedex',0);
}catch (Exception $e){
    echo $e->getMessage();
}

try{
    $magazzino2 = new Warehouse('milano','italia','bella viaetta','dhl',20);
}catch (Exception $e){
    echo $e->getMessage();
}



?>