<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 16:18
 */

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\Record;
use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testSetAttribute()
    {
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = true;
        $this->assertTrue($proxy->xyz == true);
    }
}