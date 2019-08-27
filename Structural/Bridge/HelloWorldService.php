<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 10:05
 */

namespace DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{

    public function get()
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World');
    }
}