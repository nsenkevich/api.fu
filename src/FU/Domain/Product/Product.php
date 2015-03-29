<?php

namespace FU\Domain\Product;

class Product
{
    /**
     * @var ProductId 
     */
    private $id;

    /**
     * @var string 
     */
    private $name;

    /**
     * @var string 
     */
    private $description;
    
    /**
     * @param ProductId $id
     * @param string $name
     * @param string $description
     */
    public function __construct(ProductId $id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
