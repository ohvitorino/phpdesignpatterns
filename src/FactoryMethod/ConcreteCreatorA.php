<?php

namespace OhVitorino\DesignPatterns\FactoryMethod;

class ConcreteCreatorA extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProductA();
    }

}