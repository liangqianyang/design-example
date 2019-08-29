<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 9:35
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    /**
     *
     * @param RequestInterface $request
     * @return string
     * 定义处理方法，下面应该是个数据库查询动作，但是简单化模拟，直接返回一个 'Hello World' 字符串作查询结果
     */
    protected function processing(RequestInterface $request)
    {
        // TODO: Implement processing() method.
        // 这是一个模拟输出， 在生产代码中你应该调用一个缓慢的 （相对于内存来说） 数据库查询结果。
        return 'Hello World!';
    }
}