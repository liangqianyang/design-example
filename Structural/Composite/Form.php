<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 11:13
 */

namespace DesignPatterns\Structural\Composite;

/**
 * 该组合内的节点必须派生于该组件契约。为了构建成一个组件树，
 * 此为强制性操作。
 */
class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface[]
     */
    private $elements;

    public function render(): string
    {
        // TODO: Implement render() method.
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';

        return $formCode;
    }

    /**
     * @param RenderableInterface $element
     */
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}