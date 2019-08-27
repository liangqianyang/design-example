<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 11:16
 */

namespace DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{

    public function render(): string
    {
        // TODO: Implement render() method.
        return '<input type="text" />';
    }
}