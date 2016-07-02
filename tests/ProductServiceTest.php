<?php

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Support\Collection;

class ProductServiceTest extends TestCase
{
    /** @test */
    public function Pagesize為3時Cost為6_15_24_21()
    {
        /** arrange */
        $products = $this->getProducts();
        $target = app(ProductService::class, ['products' => $products]);

        /** act */
        $actual = $target->getSum(3, 'Cost');

        /** assert */
        $expected = collect([6, 15, 24, 21]);
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function Pagesize為4時Revenue為50_66_60()
    {
        /** arrange */
        $products = $this->getProducts();
        $target = app(ProductService::class, ['products' => $products]);


        /** act */
        $actual = $target->getSum(4, 'Revenue');

        /** assert */
        $expected = collect([50, 66, 60]);
        $this->assertEquals($expected, $actual);
    }

    private function getProducts() : Collection
    {
        $products = new Collection();
        $products->push(new Product(1, 1, 11, 21));
        $products->push(new Product(2, 2, 12, 22));
        $products->push(new Product(3, 3, 13, 23));
        $products->push(new Product(4, 4, 14, 24));
        $products->push(new Product(5, 5, 15, 25));
        $products->push(new Product(6, 6, 16, 26));
        $products->push(new Product(7, 7, 17, 27));
        $products->push(new Product(8, 8, 18, 28));
        $products->push(new Product(9, 9, 19, 29));
        $products->push(new Product(10, 10, 20, 30));
        $products->push(new Product(11, 11, 21, 31));

        return $products;
    }
}
