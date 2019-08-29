<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 11:26
 */

namespace DesignPatterns\Behavioral\Mediator\Subsystem;


use DesignPatterns\Behavioral\Mediator\Colleague;

class Server extends Colleague
{

    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }

}