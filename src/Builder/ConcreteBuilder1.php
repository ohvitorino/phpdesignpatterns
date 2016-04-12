<?php
/**
 * Created by
 * User: brunop
 * Date: 12/04/2016
 * Time: 10:36
 */

namespace OhVitorino\DesignPatterns\Builder;


class ConcreteBuilder1 extends Builder
{
    public function buildPartA()
    {
        $this->product->addPart("PartA");
    }

    public function buildPartB()
    {
        $this->product->addPart("PartB");
    }

}