<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:53
 */

namespace DesignPatterns\Structural\Facade;


interface OsInterface
{

    /**
     * 声明关机方法
     * @return mixed
     */
    public function halt();

    /**
     * 声明获取名称方法，返回字符串格式数据
     * @return string
     */
    public function getName(): string;
}