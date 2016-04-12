<?php

namespace OhVitorino\DesignPatterns\AbstractFactory;

abstract class AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    abstract public function createProductA();
    /**
     * @return AbstractProductB
     */
    abstract public function createProductB();
}