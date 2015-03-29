<?php

namespace FU\Domain\Product;

interface ProductRepository
{
    public function find(ProductId $productId);

    public function findAll();

    public function add(Product $product);

    public function remove(Product $product);
}
