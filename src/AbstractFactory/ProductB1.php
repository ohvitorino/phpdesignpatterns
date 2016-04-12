<?php

namespace OhVitorino\DesignPatterns\AbstractFactory;


class ProductB1 extends AbstractProductB
{
    public function interact(AbstractProductA $a)
    {
        echo $this->getName()." interacts with ".$a->getName()."\n";
    }
}