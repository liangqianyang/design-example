<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:01
 */

namespace DesignPatterns\Structural\Decorator;


interface RenderableInterface
{

    /**
     * 创建渲染接口。
     * 这里的装饰方法 renderData() 返回的是字符串格式数据。
     */
    public function renderData(): string;
}