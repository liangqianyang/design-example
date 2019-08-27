<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:54
 */

namespace DesignPatterns\Structural\Bridge;


class PlainTextFormatter implements FormatterInterface
{

    /**
     * @param string $text
     * @return mixed|string
     * 返回字符串格式
     */
    public function format(string $text)
    {
        // TODO: Implement format() method.
        return $text;
    }

}