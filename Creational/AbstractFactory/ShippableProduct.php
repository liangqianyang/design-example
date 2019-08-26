<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 13:40
 */

namespace DesignPatterns\Creational\AbstractFactory;


class ShippableProduct implements Product
{
    /**
     * 商品价格
     * @var float
     */
    private $productPrice;

    /**
     * 运费
     * @var float
     */
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    /**
     * 计算最终价格
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}