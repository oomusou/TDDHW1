<?php

namespace App\Models;

class Product
{
    /** @var int  */
    public $Id;
    /** @var int  */
    public $Cost;
    /** @var int  */
    public $Revenue;
    /** @var int  */
    public $SellPrice;

    /**
     * Product constructor.
     * @param $id
     * @param $cost
     * @param $revenue
     * @param $sellPrice
     */
    public function __construct(int $id, int $cost, int $revenue, int $sellPrice)
    {
        $this->Id = $id;
        $this->Cost = $cost;
        $this->Revenue = $revenue;
        $this->SellPrice = $sellPrice;
    }
}