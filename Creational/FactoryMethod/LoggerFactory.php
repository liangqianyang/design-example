<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:40
 */

namespace DesignPatterns\Creational\FactoryMethod;


interface  LoggerFactory
{
    public function createLogger(): Logger;
}