<?php

class Product {
    private static $count;
    private $id;
    private $name;
    private $price;

    public function __construct($nom, $prix) {
        self::$count++;
        $this->setId(self::$count);
        $this->name = $nom;
        $this->price = $prix;
    }

    public function setId($n) {
        $this->id = $n;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}