<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 9:43
 */

namespace DesignPatterns\Behavioral\State;


class ContextOrder extends StateOrder
{

    public function getState(): StateOrder
    {
        return static::$state;
    }

    public function setState(StateOrder $order)
    {
        static::$state = $order;
    }

    public function done()
    {
        static::$state->done();
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}