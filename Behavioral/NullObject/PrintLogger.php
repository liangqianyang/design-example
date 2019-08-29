<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 14:57
 */

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 创建一个日记打印类实现日记接口。
 */
class PrintLogger implements LoggerInterface
{

    public function log(string $str)
    {
        echo $str;
    }
}