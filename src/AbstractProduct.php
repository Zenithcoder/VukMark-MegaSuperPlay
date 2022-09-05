<?php

namespace awonusi;

abstract class AbstractProduct
{
    /**
     * determine id
     *
     * @var int
     */
    public  int $id;

    /**
     * determine width
     *
     * @var int
     */
    public  int $width;

    /**
     * determine height
     *
     * @var int
     */
    public  int $height;

    /**
     * determine depth
     *
     * @var int
     */
    public  int $depth;

    /**
     * determine price
     *
     * @var int
     */
    public  int $price;

    /**
     * determine type
     *
     * @var string
     */
    public  string $type;

    public function __construct(int $id)
    {
        $this->id = $id;
        //$this->width = $width;
       // $this->height = $height;
       // $this->depth = $depth;
       // $this->price = $price;
       // $this->type = $type;
    }

    /**
     * returns the product Price
     * @return string
     */
    public function getPrice():int
    {
        return $this->price;
    }

     /**
     * returns the product type
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * returns the product id
     * @return string
     */
    public function getId(): int
    {
        return $this->id;
    }
}