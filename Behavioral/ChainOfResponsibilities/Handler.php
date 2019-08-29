<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 9:15
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{

    /**
     * 定义继承处理器
     * @var null
     */
    private $successor = null;

    /**
     * 输出集成处理器对象
     * Handler constructor.
     * @param Handler|null $handler
     */
    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     *  通过使用模板方法模式这种方法可以确保每个子类不会忽略调用继承
     * @param RequestInterface $request
     * @return mixed
     */
    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);
        if ($processed === null) {
            if ($this->successor !== null) {
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }

    /**
     * 声明处理方法。
     */
    abstract protected function processing(RequestInterface $request);
}