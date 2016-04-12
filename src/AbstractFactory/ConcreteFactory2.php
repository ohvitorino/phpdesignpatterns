<?php
/**
 * Created by
 * User: brunop
 * Date: 11/04/2016
 * Time: 16:22
 */

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