<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 15:32
 */

namespace DesignPatterns\Structural\Flyweight;


interface FlyweightInterface
{

    /**
     * 创建传递函数
     * @param string $extrinsicState
     * @return string
     * 返回字符串格式数据
     */
    public function render(string $extrinsicState):string;
}