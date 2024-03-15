<?php
// Trong app/Services/ProductService.php

namespace App\Services;

class ProductService
{
    private $productId;

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }
}
?>
