<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 9:36
 */

namespace DesignPatterns\Behavioral\State;


class ShippingOrder extends StateOrder
{

    public function __construct()
    {
        $this->setStatus('shipping');
    }

    protected function done()
    {
        $this->setStatus('completed');
    }

}