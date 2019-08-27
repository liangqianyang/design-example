<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:04
 */

namespace DesignPatterns\Structural\Decorator;


class Webservice implements RenderableInterface
{

    /**
     * @var string
     */
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    /**
     * 实现 RenderableInterface 渲染接口中的 renderData() 方法
     * @return string
     */
    public function renderData(): string
    {
        // TODO: Implement renderData() method.
        return $this->data;
    }
}