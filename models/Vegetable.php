<?php

class Vegetable extends Product {
    private $productorName;
    private $expiresAt;

    public function __construct($nom, $prix, $produc, $expire) {
        parent::__construct($nom, $prix);
        $this->productorName = $produc;
        $this->expiresAt = $expire;
    }

    public function getProductor() {
        return $this->productorName;
    }

    public function getExpire() {
        return $this->expiresAt;
    }

    public function isFresh() {
        $date = date('Y-m-d');
        if ($date > $this->expiresAt) {
            return false;
        } else {
            return true;
        }
    }
}