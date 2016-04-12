<?php

namespace OhVitorino\DesignPatterns\Builder;

class Product
{
    private $parts = [];

    public function addPart($part)
    {
        $this->parts[] = $part;
    }

    public function getParts()
    {
        return $this->parts;
    }
}