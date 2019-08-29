<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 10:06
 */

namespace DesignPatterns\Behavioral\Strategy;


interface ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int;
}