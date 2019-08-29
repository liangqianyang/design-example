<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 14:56
 */

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 重要特征：空日记必须像其他日记意向从这个接口继承。
 */
interface LoggerInterface
{

    /**
     * @param string $str
     * @return mixed
     */
    public function log(string $str);
}