<?php

namespace OhVitorino\DesignPatterns\AbstractFactory;


class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA2("A2");
    }

    public function createProductB()
    {
        return new ProductB2("B2");
    }

}