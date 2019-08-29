<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 15:00
 */

namespace DesignPatterns\Behavioral\NullObject;


class Service
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * 做些什么。。。
     * 在日记中返回了 '我们在 Service: doSomething 里' 。
     */
    public function doSomething()
    {
        // 提示：这里你只是使用它，而不需要通过如：is_null() 检查 $logger 是否已经设置。
        $this->logger->log('We are in ' . __METHOD__);
    }
}