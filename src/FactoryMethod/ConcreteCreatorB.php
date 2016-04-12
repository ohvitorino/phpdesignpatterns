<?php

namespace OhVitorino\DesignPatterns\FactoryMethod;

class ConcreteCreatorB extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProductB();
    }

}