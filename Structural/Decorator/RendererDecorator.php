<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:06
 */

namespace DesignPatterns\Structural\Decorator;


abstract class RendererDecorator implements RenderableInterface
{

    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    /**
     * 传入渲染接口类对象 $renderer
     * RendererDecorator constructor.
     * @param RenderableInterface $renderer
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}