<?php
/**
 * Created by
 * User: brunop
 * Date: 12/04/2016
 * Time: 9:48
 */

namespace OhVitorino\DesignPatterns\AbstractFactory;


class AbstractProduct
{
    /** @var  string */
    private $name;

    /**
     * ProductA1 constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}