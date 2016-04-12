<?php

namespace OhVitorino\DesignPatterns\Test;


use OhVitorino\DesignPatterns\AbstractFactory\Client;
use OhVitorino\DesignPatterns\AbstractFactory\ConcreteFactory1;
use OhVitorino\DesignPatterns\AbstractFactory\ConcreteFactory2;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testAbstractFactory()
    {
        // Abstract Factory #1
        $factory1 = new ConcreteFactory1();
        $client1 = new Client($factory1);
        $client1->run();

        // Abstract Factory #1
        $factory2 = new ConcreteFactory2();
        $client2 = new Client($factory2);
        $client2->run();

        $this->assertTrue(true);
    }
}