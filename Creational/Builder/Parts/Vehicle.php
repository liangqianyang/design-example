<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:00
 */

namespace DesignPatterns\Creational\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {

        $this->data[$key] = $value;
    }
}