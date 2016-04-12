<?php
/**
 * Created by
 * User: brunop
 * Date: 11/04/2016
 * Time: 16:22
 */

namespace OhVitorino\DesignPatterns\AbstractFactory;


class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA1("A1");
    }

    public function createProductB()
    {
        return new ProductB1("B1");
    }

}