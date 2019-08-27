<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:52
 */

namespace DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    /**
     * 创建格式化接口
     * @param string $text
     * @return mixed
     */
    public function format(string $text);
}