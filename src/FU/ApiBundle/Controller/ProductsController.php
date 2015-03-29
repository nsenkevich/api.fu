<?php

namespace FU\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ProductsController extends FOSRestController
{
    /**
     * List all products.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     * @Rest\View
     */
    public function allAction()
    {
        $products = $this->get('product_repository')->findAll();
        return array('products' => $products);
    }
}