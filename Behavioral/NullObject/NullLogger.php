<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 14:59
 */

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 创建一个空日记类实现日记接口。
 */
class NullLogger implements LoggerInterface
{

    public function log(string $str)
    {
        // TODO: Implement log() method.
        // 什么也不用做
    }
}