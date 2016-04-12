<?php

namespace OhVitorino\DesignPatterns\Builder;

class Director
{
    public function construct(Builder $builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}