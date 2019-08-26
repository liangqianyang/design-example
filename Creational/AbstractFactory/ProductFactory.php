<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 13:44
 */

namespace DesignPatterns\Creational\AbstractFactory;


class ProductFactory
{

    const SHIPPING_COSTS = 50;//运费

    /**
     * 计算需要运费商品的最终价格
     * @param int $price
     * @return Product
     */
    public function createShippableProduct(int $price):Product{
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    /**
     * 计算电子商品的最终价格
     * @param int $price
     * @return Product
     */
    public function createDigitalProduct(int $price): Product
    {
        return new DigitalProduct($price);
    }
}