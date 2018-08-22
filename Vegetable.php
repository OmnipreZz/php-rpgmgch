<?php

require_once 'Product.php';

class Vegetable extends Product {
    protected $productName;
    protected $expiresAt;

    public function __construct($nom, $prix, $produit, $expire) {
        parent::__construct($nom, $prix);
        $this->productName = $produit;
        $this->expiresAt = $expire;
    }

    public function getProduct() {
        return $this->productName;
    }

    public function getExpire() {
        return $this->expiresAt;
    }

    public function isFresh() {
        $date = date('d-m-y');
        if ($date > $this->expiresAt) {
            return false;
        } else {
            return true;
        }
    }
}