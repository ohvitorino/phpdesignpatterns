<?php

namespace OhVitorino\DesignPatterns\AbstractFactory;


class Client
{
    /** @var  AbstractProductA */
    private $abstractProductA;
    /** @var  AbstractProductB */
    private $abstractProductB;

    /**
     * Client constructor.
     * @param AbstractFactory $factory
     */
    public function __construct(AbstractFactory $factory)
    {
        $this->abstractProductA = $factory->createProductA();
        $this->abstractProductB = $factory->createProductB();
    }

    public function run()
    {
        $this->abstractProductB->interact($this->abstractProductA);
    }
}