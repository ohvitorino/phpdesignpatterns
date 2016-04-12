<?php
/**
 * Created by
 * User: brunop
 * Date: 11/04/2016
 * Time: 16:27
 */

namespace OhVitorino\DesignPatterns\AbstractFactory;


class ProductB2 extends AbstractProductB
{
    public function interact(AbstractProductA $a)
    {
        echo $this->getName()." interacts with ".$a->getName()."\n";
    }
}