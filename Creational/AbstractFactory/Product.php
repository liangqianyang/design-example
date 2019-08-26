<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 13:37
 */

namespace DesignPatterns\Creational\AbstractFactory;
interface Product
{
    public function calculatePrice(): int;
}