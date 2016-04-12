<?php

namespace OhVitorino\DesignPatterns\Builder;

abstract class Builder
{
    protected $product;

    /**
     * Builder constructor.
     */
    public function __construct()
    {
        $this->product = new Product();
    }


    public abstract function buildPartA();

    public abstract function buildPartB();

    /**
     * @return Product
     */
    public function getResult()
    {
        return $this->product;
    }
}