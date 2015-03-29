<?php

namespace FU\DomainBundle\Repository;

use FU\Domain\Product\Product;
use FU\Domain\Product\ProductId;
use FU\Domain\Product\ProductRepository;

class InMemoryProductRepository implements ProductRepository
{
    private $products;

    public function __construct()
    {
        $this->products[] = new Product(
            new ProductId('1'), 'product 1', 'descr 1'
        );
        $this->products[] = new Product(
            new ProductId('2'), 'product 2', 'descr 2'
        );
    }

    public function find(ProductId $productId)
    {
    }

    public function findAll()
    {
        return $this->products;
    }

    public function add(Product $product)
    {
    }

    public function remove(Product $product)
    {
    }
}