<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 10:13
 */

namespace DesignPatterns\Behavioral\Strategy;


class IdComparator implements ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}