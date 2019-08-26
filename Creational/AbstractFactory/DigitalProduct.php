<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 13:43
 */

namespace DesignPatterns\Creational\AbstractFactory;


class DigitalProduct implements Product
{
    /**
     * 商品价格
     * @var int
     */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * 计算最终价格
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->price;
    }
}