<?php

namespace App\Services;

use Illuminate\Support\Collection;

class ProductService
{
    /** @var Collection */
    private $products;

    /**
     * ProductService constructor.
     * @param $products
     */
    public function __construct(Collection $products)
    {
        $this->products = $products;
    }


    /**
     * @param int $pageSize
     * @param string $columnName
     * @return Collection
     */
    public function getSum(int $pageSize, string $columnName) : Collection
    {
        return $this->products
            ->chunk($pageSize)
            ->map(function (Collection $product) use ($columnName) {
                return $product->sum($columnName);
            });
    }
}