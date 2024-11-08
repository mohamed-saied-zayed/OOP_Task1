<?php

class Product {
    var $name;
    var $price;
    var $brand;
    var $image;
    var $description;
    var $tax = 14;

    function getName(){
        return $this->name;
    }
    function priceAfterDiscount($discount){
        $this->price = $this->price - $discount;
        return $this->price;
    }

    function getFinalPrice(){
        return $this->price + (($this->tax/100)* $this->price);
    }
}