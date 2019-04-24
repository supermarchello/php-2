<?php

abstract class Product
{
    public $name;
    
    abstract public function getBasePrice();
    
    abstract public function getFinalPrice();
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

class CasualProduct extends Product
{
    private $id;
    
    private $basePrice;
    
    public function __construct($name, $basePrice)
    {
        static $id = 0;
        $id++;
        $this->setId($id);
        $this->setName($name);
        $this->setBasePrice($basePrice);
    }
    
    private function setId(int $id)
    {
        $this->id = $id;
    }
    
    private function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
    }
    
    public function getBasePrice()
    {
        return $this->basePrice;
    }
    
    public function getFinalPrice()
    {
        return $this->getFinalPrice();
    }
}

class DigitalProduct extends Product
{
    private $id;
    
    private $basePrice;
    
    public function __construct($name, $basePrice)
    {
        static $id = 0;
        $id++;
        $this->setId($id);
        $this->setName($name);
        $this->setBasePrice($basePrice);
    }
    
    public function getFinalPrice()
    {
        return $this->getBasePrice() / 2;
    }
    
    public function getBasePrice()
    {
        return $this->basePrice;
    }
    
    /**
     * @param mixed $basePrice
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}

class WeightProduct extends Product
{
    private $weight;
    
    private $id;
    
    private $basePrice;
    
    public function __construct($name, $basePrice, $weight)
    {
        static $id = 0;
        $id++;
        $this->setId($id);
        $this->setName($name);
        $this->setBasePrice($basePrice);
        $this->setWeight($weight);
    }
    
    private function setId(int $id)
    {
        $this->id = $id;
    }
    
    private function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
    }
    
    private function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
    public function getFinalPrice()
    {
        return $this->getBasePrice() * $this->getWeight();
    }
    
    public function getBasePrice()
    {
        return $this->basePrice;
    }
    
    public function getWeight()
    {
        return $this->weight;
    }
}


