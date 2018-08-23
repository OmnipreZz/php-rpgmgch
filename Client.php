<?php

require_once 'User.php';
require_once 'Product.php';

class Client extends User {

    protected $cart;
    protected $billAmount;
    
    public function __contruct($newMail) {
        parent::__construct($newMail);
        $this->cart = [];
        $this->billAmount = 0;
        
    }

    public function buy(Product $product) {
        $this->addProductToCart($product);
        $this->billAmount += $product->getPrice();
    }

    public function addProductToCart(Product $product) {
        array_push($this->cart, $product);
    }

    public function getCart() {
        return $this->cart;
    }

    public function getBill() {
        return $this->billAmount;
    }
    
}