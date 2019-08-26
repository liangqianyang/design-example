<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:42
 */

namespace DesignPatterns\Creational\FactoryMethod;


class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        // TODO: Implement createLogger() method.
        return new StdoutLogger();
    }
}