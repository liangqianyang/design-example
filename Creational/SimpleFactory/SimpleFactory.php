<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 16:47
 */

namespace DesignPatterns\Creational\SimpleFactory;


class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}