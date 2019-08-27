<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 10:22
 */

namespace DesignPatterns\Structural\Bridge;


class HtmlFormatter implements FormatterInterface
{

    /**
     * @param string $text
     * @return mixed|string
     * 返回HTML格式
     */
    public function format(string $text)
    {
        // TODO: Implement format() method.
        return sprintf('<p>%s</p>', $text);
    }
}