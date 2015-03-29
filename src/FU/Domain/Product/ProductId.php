<?php

namespace FU\Domain\Product;

class ProductId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
