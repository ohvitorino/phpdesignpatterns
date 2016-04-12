<?php

namespace OhVitorino\DesignPatterns\Tests;

use OhVitorino\DesignPatterns\Builder\ConcreteBuilder1;
use OhVitorino\DesignPatterns\Builder\ConcreteBuilder2;
use OhVitorino\DesignPatterns\Builder\Director;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuilder()
    {
        /** @var Director $director */
        $director = new Director();

        $builder1 = new ConcreteBuilder1();
        $builder2 = new ConcreteBuilder2();

        // Construct two products
        $director->construct($builder1);
        $director->construct($builder2);

        $product1 = $builder1->getResult();
        $product2 = $builder2->getResult();

        $this->assertNotCount(0, $product1->getParts());
        $this->assertNotCount(0, $product2->getParts());
    }
}