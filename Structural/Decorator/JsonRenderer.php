<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:17
 */

namespace DesignPatterns\Structural\Decorator;


class JsonRenderer extends RendererDecorator
{
    /**
     * 创建 Json 修饰者并继承抽象类 RendererDecorator
     * @return string
     */
    public function renderData(): string
    {
        // TODO: Implement renderData() method.
        return json_encode($this->wrapped->renderData());
    }

}