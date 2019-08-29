<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 9:38
 */

namespace DesignPatterns\Behavioral\State;


class CreateOrder extends StateOrder
{

    public function __construct()
    {
        $this->setStatus('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}