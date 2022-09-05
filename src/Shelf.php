<?php

namespace awonusi;
use Exception;

class Shelf
{
    public $products;
    private const WIDTH = 2000;
    private const HEIGHT = 2000;
    private const DEPTH = 210;

    /**
    * Returns all the products
    *  
    */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
    * to add product
    *  
    */
    public function addProduct(AbstractProduct $product): void
    {
        if( $product->depth > Shelf::DEPTH  || $product->width > Shelf::WIDTH || $product->height >Shelf::HEIGHT){
            return;
        }

        $this->products[$product->getId()] = $product;
        
    }

    /**
    * to remove product
    *  
    */
    public function removeProduct(AbstractProduct $product)
    {
        if(!is_null($this->products[$product->getId()])){
            unset($this->products[$product->getId()]);
        } 
    }

    /**
    * Returns the sum off all products prices
    * array_reduce docs: http://php.net/manual/en/function.array-reduce.php
    */
    public function total(): int
    {
        return array_reduce($this->getProducts(), function($carry, $product){
            return $carry + $product->getPrice();
        });
    }

    /**
    * return total by type
    *  
    */
    public function totalByType(string $type): int
    {
        $new_array = array_filter(
            $this->getProducts(), 
            function($v) use ($type) { return $v->type == $type; }
        );
        return array_reduce($new_array, function($carry, $product){
            return $carry + $product->getPrice();
        });
    }
}