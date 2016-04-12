<?php
/**
 * Created by
 * User: brunop
 * Date: 12/04/2016
 * Time: 12:15
 */

namespace OhVitorino\DesignPatterns\Test;


use OhVitorino\DesignPatterns\FactoryMethod\ConcreteCreatorA;
use OhVitorino\DesignPatterns\FactoryMethod\ConcreteCreatorB;
use OhVitorino\DesignPatterns\FactoryMethod\Creator;
use OhVitorino\DesignPatterns\FactoryMethod\Product;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testFactoryMethod()
    {
        $creators = array(
                new ConcreteCreatorA(),
                new ConcreteCreatorB(),
        );

        /** @var Creator $creator */
        foreach ($creators as $creator) {
            /** @var Product $product */
            $product = $creator->factoryMethod();
            $this->assertNotNull($product);
        }
    }
}