<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:26
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{

    public function unlock();

    public function pressNext();

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array;
}