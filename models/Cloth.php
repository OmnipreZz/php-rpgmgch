<?php

class Cloth extends Product {
    protected $brand;

    public function __construct($nom, $prix, $marque) {
        parent::__construct($nom, $prix);
        $this->brand = $marque;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function try() {
        
    }
}