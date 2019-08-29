<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 10:12
 */

namespace DesignPatterns\Behavioral\Command;


interface CommandInterface
{

    /**
     * 这是在命令行模式中很重要的方法，
     * 这个接收者会被载入构造器
     */
    public function execute();
}