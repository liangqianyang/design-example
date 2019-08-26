<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:34
 */

namespace DesignPatterns\Creational\FactoryMethod;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        // TODO: Implement log() method.
        echo $message;
    }

}