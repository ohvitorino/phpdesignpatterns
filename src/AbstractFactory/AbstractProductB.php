<?php
/**
 * Created by
 * User: brunop
 * Date: 11/04/2016
 * Time: 16:24
 */

namespace OhVitorino\DesignPatterns\AbstractFactory;


abstract class AbstractProductB extends AbstractProduct
{
    public abstract function interact(AbstractProductA $a);
}