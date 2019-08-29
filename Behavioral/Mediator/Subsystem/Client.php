<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 11:18
 */

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Client 类是一个发出请求并获得响应的客户端。
 */
class Client extends Colleague
{

    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $content)
    {
        echo $content;
    }
}