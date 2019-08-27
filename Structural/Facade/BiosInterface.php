<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:55
 */

namespace DesignPatterns\Structural\Facade;


interface BiosInterface
{

    /**
     * 声明执行方法
     * @return mixed
     */
    public function execute();

    /**
     * 声明等待密码输入方法
     * @return mixed
     */
    public function waitForKeyPress();

    /**
     * 声明登录方法。
     * @var OsInterface
     */
    public function launch(OsInterface $os);

    /**
     * 声明关机方法。
     */
    public function powerDown();
}