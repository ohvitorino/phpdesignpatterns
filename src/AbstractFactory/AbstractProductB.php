<?php

namespace OhVitorino\DesignPatterns\AbstractFactory;


abstract class AbstractProductB extends AbstractProduct
{
    public abstract function interact(AbstractProductA $a);
}