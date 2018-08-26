<?php

require __DIR__.'/User.php';
require __DIR__.'/Product.php';


class Client extends User {

    private $cart = [];
    private $billAmount = 0;


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