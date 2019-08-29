<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 10:13
 */

namespace DesignPatterns\Behavioral\Command;


class HelloCommand implements CommandInterface
{

    /**
     * @var Receiver
     */
    private $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * 执行和输出 "Hello World".
     */
    public function execute()
    {
        // TODO: Implement execute() method.
        // 有时候，这里没有接收者，并且这个命令执行所有工作
        $this->output->write('Hello World');
    }


}